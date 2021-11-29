<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'site_register';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );

if(mysqli_connect_error()){
	exit('Eroare de conectare la baza de date' . mysqli_connect_error());
}	
	
$email = $_POST['email'];
$password = $_POST['password'];

$email_bool = false;
$password_bool = false;

if(empty($email) || empty($password)){
	header("Refresh:0; url=../pages/login.php");
	echo '<script>alert("Unul din rânduri nu a fost completat!")</script>';
	exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Refresh:0; url=../pages/login.php");
	echo '<script>alert("Nu ați introdus un e-mail valabil!")</script>';}
else{
	$email_bool = true;
}

if(!preg_match ("/^[!@#$%^&*a-zA-Z0-9]{5,15}$/", $password)){
	header("Refresh:0; url=../pages/login.php");
	echo '<script>alert("Parola aleasa conține elemente interzise (trebuie să conțină doar litere majuscule și minuscule, cifre și simbolurile speciale: !, @, #, $, %, ^, &, *), sau nu este cuprinsă între 5 și 15 caractere!")</script>';  }
else{
	$password_bool = true;
}

if($password_bool && $email_bool ){
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '$email' AND password = '$password'")
				or die("Nu au fost extrase datele din baza de date!".mysqli_error());
	$row = mysqli_fetch_array($result);

	if($row['email'] === $email && $row['password'] === $password){
		$firstName = $row['firstName'];
		$con->close();
		session_start();
		$_SESSION["firstName"] = $firstName;
		$_SESSION['lastName'] = $row['lastName'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['msg'] = "Salut, $firstName! Bine ai revenit!";
		header("Location:../pages/hello_page.php");
	}
	else{
		header("Refresh:0; url=../pages/login.php");
		echo '<script>alert("Nu există asemenea utilizator!")</script>';
		$con->close();
	}	
}
?>