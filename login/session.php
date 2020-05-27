<?php
session_start();
if(! isset($_SESSION['userlogin'])){
	header("Location: bakery/");
}
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION);
	header("Location: bakery/");
}
?>
<a href="session.php?logout=true">Logout</a>