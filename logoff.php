<?php
session_start();

if(isset($_SESSION['user'])!= "")
{
		header("location:dashboard.php");
}

if(!isset($_SESSION['user']))
{
	header("location:index.php");	
}
else if(isset($_POST['logout']))
{
	session_destroy();
	session_unset($_SESSION['user']);
	header("location:index.php");	
	
}

?>