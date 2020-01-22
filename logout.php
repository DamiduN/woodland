<?php 
session_start();
if (isset($_GET['logout'])) {

	unset($_SESSION['email']);
	header("Location:home.php");
}

 ?>