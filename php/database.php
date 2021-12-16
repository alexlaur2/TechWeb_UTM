<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'site_register';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );
 
if(mysqli_connect_error()){
	exit('Eroare de conectare la baza de date' . mysqli_connect_error());
}
?>