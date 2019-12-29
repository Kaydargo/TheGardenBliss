<?php
include("loginServ.php");
include 'includes/header.php';
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet"> 
<link rel="icon" type="image/png" href="images/controller.png">
<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css"/>
<style>label {
     color: black;
}
</style>
</head>
<body>
<br><br><br>
    <h3 align="center">Register for Garden Bliss</h3>  
    <div class="login">
                <form method="post" action="register_user.php">  
                    <label><strong>Enter First Name </strong><br></label>  
                     <input type="text" name="firstName" class="form-control" required/>  
                     <br />
                     <label><strong>Enter Last Name </strong><br></label>  
                     <input type="text" name="lastName" class="form-control" required/>  
                     <br />
                     <label><strong>Enter Username </strong><br><em>(Minimum 6 characters)</em></label>  
                     <input type="text" name="username" class="form-control" required pattern="{6,}"/>  
                     <br />
                     <label><strong>Enter Email Address </strong><br></label>  
                     <input type="text" name="email" class="form-control" required/>  
                     <br />   
                     <label><strong>Enter Password </strong><br><em>(Minimum 8 characters and include one upper case and special character and one number)</em> </label>  
                     <input type="password" name="password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="login.php">Have an account? Login</a></p>  
                </form>
                </div>
                <div id="errMsg" style="text-align:center;">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
</div>
</body>
</html>