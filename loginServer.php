<?php
session_start();
require 'database.php';
if(isset($_POST['login'])){
    $userID = filter_input(INPUT_POST, 'userID', FILTER_VALIDATE_INT) . !empty($_POST['userID']) ? trim($_POST['userID']) : null;
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $getUser = "SELECT userID, username, password FROM users WHERE username = :uname";
    $statement = $db->prepare($getUser);
    $statement->bindValue(':uname', $username);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if($user === false){
        $_SESSION['errMsg'] = "Invalid username or password";
        header('location: https://thegardenbliss.com/login.php');
        exit;
    }
     else{
        $validPassword = password_verify($password, $user['password']);
        
        if($validPassword){
            $_SESSION['userID'] = $user['userID'];
            $_SESSION['lastLogin'] = time();

            header('Location: https://thegardenbliss.com/admin.php');
            exit;      
        }
        else{
            $_SESSION['errMsg'] ='Invalid username or password';
            header('Location: https://thegardenbliss.com/login.php');
        exit;
        }
    }
}
?>