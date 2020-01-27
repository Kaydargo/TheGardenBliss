<?php
session_start();
require 'includes/database.php';
if(isset($_POST['login'])){
    $userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT) . !empty($_POST['userID']) ? trim($_POST['userID']) : null;
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $getUser = "SELECT userID, username, userpass FROM users WHERE username = :uname";
    $statement = $conn->prepare($getUser);
    $statement->bindValue(':uname', $username);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user === false){
        $_SESSION['errMsg'] = "Invalid Username or Password";
        header('location:login.php');
        exit;
    }
     else{
        $validPassword = password_verify($password, $user['userpass']);
        
        if($validPassword){
            $_SESSION['userID'] = $user['userID'];
            header('Location: userProfile.php');
            exit;      
        }
        else{
            $_SESSION['errMsg'] ='Invalid username or password';
            header('location:login.php');
        exit;
        }
    }
}
?>