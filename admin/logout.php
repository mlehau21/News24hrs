<?php
	if(!isset($_SESSION))
		session_start();
		header("location:login.php");
		session_destroy();
?>