<?php 
if(empty($_SESSION['firstName'])){
	header("Location:../pages/login.php");
}
?>