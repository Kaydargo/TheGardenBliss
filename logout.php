<?php
    ob_start();
?>
 <?php
    session_start();
    $_SESSION = array();
    session_unset();
    session_destroy();
    header("location: login.php");
    exit();
?>
<?php 
  ob_end_flush();
  ?>