<?php
session_start();
require 'includes/database.php';

if(isset($_POST['register'])){
$username = htmlspecialchars(!empty($_POST['username']) ? trim($_POST['username']) : null);
$firstName = htmlspecialchars(!empty($_POST['firstName']) ? trim($_POST['firstName']) : null);
$lastName = htmlspecialchars(!empty($_POST['lastName']) ? trim($_POST['lastName']) : null);
$email = htmlspecialchars(!empty($_POST['email']) ? trim($_POST['email']) : null);
$pass = htmlspecialchars(!empty($_POST['password']) ? trim($_POST['password']) : null);

$upperCase = preg_match('@[A-Z]@', $pass);
$lowerCase = preg_match('@[a-z]@', $pass);
$number    = preg_match('@[0-9]@', $pass);
$specialChars = preg_match('@[^\w]@', $pass);

if(empty(trim($_POST["username"]))){
    $_SESSION['errMsg'] ='You must enter a username.';
    header('location:register.php');
        exit;
}

elseif(strlen($username) < 6) {
    $_SESSION['errMsg'] ='Your username must be 6 characters long.';
    header('location:register.php');
        exit;
}

else{
if(empty(trim($_POST["password"]))){
    $_SESSION['errMsg'] ='You must enter a password.';
    header('location:register.php');
        exit;
}

elseif( !$upperCase || !$lowerCase || !$number || !$specialChars || strlen($pass) < 8) {   
    $_SESSION['errMsg'] ='Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
    header('location:register.php');
    exit;
}

elseif (stripos($pass, $username) !== false) {
    $_SESSION['errMsg'] ='Password cannot contain username!';
    header('location:register.php');
        exit;
}

else{
    $pass = trim($_POST["password"]);

    //Check if username is already in use
    $checkUsername = "SELECT COUNT(username) AS numb FROM users WHERE username = :uname";
    $stmt = $conn->prepare($checkUsername);
    $stmt->bindValue(':uname', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($row['numb'] > 0){
        $_SESSION['errMsg'] ='That username is invalid';
        header('location:register.php');
        exit;
    }

    $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

    //Create user 
    if(!empty($pass)){
    $createUser = "INSERT INTO users (username, firstName, lastName, email, userpass) VALUES (:uname, :fname, :lname, :mail, :pword)";
    $stmt1 = $conn->prepare($createUser);
    $stmt1->bindValue(':uname', $username);
    $stmt1->bindValue(':fname', $firstName);
    $stmt1->bindValue(':lname', $lastName);
    $stmt1->bindValue(':mail', $email);
    $stmt1->bindValue(':pword', $passwordHash);
    $result = $stmt1->execute();
   
    if($result){
                $_SESSION['userID'] = $user['userID'];
                header('Location: userProfile.php');
                echo 'Thank you for registering for Garden Bliss, Enjoy!';
    }
    }
}
}
}
