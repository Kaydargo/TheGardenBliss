<?php
session_start();
include("loginServ.php");
include ('includes/header.php');
?>
<!doctype html>
<html>
<head>
<link href="css/style.css" rel="stylesheet">
<link href="css/graham.css" rel="stylesheet">  
</head>
<body>
<br><br><br><br><br>
<div class="container">
<div class="login">
<h1 align="center">Login</h1>
<form method="post" action="loginServ.php">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" required class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" required class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />                    
                </form>  
                <p align="center"><a href="register.php" style="color: #41602d">No account? Register</a></p> 
</div>
<div id="errMsg" style="text-align:center;">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
</div>
</div>
</body>
<?php include 'includes/footer.php'; ?>
</html>