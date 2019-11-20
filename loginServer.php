<?php
 require_once 'includes/database.php';
$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){
    
 if(empty($_POST['email']) || empty($_POST['userpass']))
     { 
 $error = "Email address or Password is Invalid";
 }
 
 else
 {
 //Define $user and $pass
 $usermail=$_POST['email'];
 $userpass=$_POST['userpass'];
 
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter

 $conn = mysqli_connect("localhost", "root", '');
 //Selecting Database
 $db = mysqli_select_db($conn, "gardening");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM users WHERE  usermail='$email' AND userpass='$userpass' ");
 
 $rows = mysqli_num_rows($query);
 
 if($rows === 1){
     header("Location: admin.php");
die(); // Redirecting to other page
 }
 
 else
 {
 $error = "Email Address or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
 
}