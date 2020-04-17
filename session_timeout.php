<?php

$inactive = 100;

if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        { 
			session_destroy(); header("Location: https://thegardenbliss.com/logout.php"); 
		}
}
$_SESSION['timeout'] = time();
