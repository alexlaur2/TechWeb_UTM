<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'site_register';

$username = $_POST['username'];
$email = $_POST['email'];
$text_contact = $_POST['text_contact'];

$username_bool = false;
$email_bool = false;
$text_contact_bool = false;
$complete = false;

$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );

if(mysqli_connect_error()){
	exit('Eroare de conectare la baza de date' . mysqli_connect_error());
}

if(empty($username) || empty($email) || empty($text_contact)){
	header("Refresh:0; url=../pages/contact.php");
	echo '<script>alert("Nu ați completat toate casetele!")</script>';
	exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Refresh:0; url=../pages/contact.php");
	echo '<script>alert("Nu ați introdus un e-mail valabil!")</script>';}
else{
	$email_bool = true;
}

if (!preg_match ("/^[a-zA-Z]+([\s][a-zA-Z]+)*$/", $username) ) {  
	header("Refresh:0; url=../pages/contact.php");
	echo '<script>alert("Nu ați folosit doar litere și spații la nume!")</script>';  }
else{
	$username_bool = true;
}

if (!preg_match ("/^.{1,300}$/", $username) ) {  
	header("Refresh:0; url=../pages/contact.php");
	echo '<script>alert("Textul nu conține mai puțin de 300 de caractere!")</script>';  }
else{
	$text_contact_bool = true;
}

if($text_contact_bool && $username_bool && $email_bool){
	if($stmt = $conn->prepare('INSERT INTO contact (username, contact_text, email) VALUES (?, ?, ?)')) {
		$stmt->bind_param('sss', $username, $text_contact, $email);
		$stmt->execute();
		session_start();
		$_SESSION['msg'] = "Mersi pentru comentariu!";
		}
}

$conn->close();

header("Refresh:0; url=../pages/hello_page.php");
?>