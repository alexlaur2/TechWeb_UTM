<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'site_register';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$firstName_bool = false;
$lastName_bool = false;
$email_bool = false;
$password_bool = false;
$confirmPassword_bool = false;
$complete = false;

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME );

if(mysqli_connect_error()){
	exit('Eroare de conectare la baza de date' . mysqli_connect_error());
}

if(empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirmPassword)){
	header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Nu ați completat toate casetele!")</script>';
	exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Nu ați introdus un e-mail valabil!")</script>';}
else{
	$email_bool = true;
}

if (!preg_match ("/^[a-zA-z]*$/", $firstName) ) {  
   header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Nu ați folosit doar litere și spații la prenume!")</script>';  }
else{
	$firstName_bool = true;
}

if (!preg_match ("/^[a-zA-z]*$/", $lastName)) {  
	header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Nu ați folosit doar litere și spații la nume!")</script>';  }
else{
	$lastName_bool = true;
}

if(!preg_match ("/^[!@#$%^&*a-zA-Z0-9]{5,15}$/", $password)){
	header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Parola aleasa conține elemente interzise (trebuie să conțină doar litere majuscule și minuscule, cifre și simbolurile speciale: !, @, #, $, %, ^, &, *), sau nu este cuprinsă între 5 și 15 caractere!")</script>';  }
else{
	$password_bool = true;
}

if($password != $confirmPassword ){
	header("Refresh:0; url=../pages/sign_up.php");
	echo '<script>alert("Parolele introduse nu coincid!!")</script>';}
else{
	$confirmPassword_bool = true;
}

if($firstName_bool && $lastName_bool && $email_bool && $password_bool && $confirmPassword_bool){
	
	if($stmt = $con->prepare('SELECT id, password FROM users WHERE email = ?')){
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$stmt->store_result();
		
		if($stmt->num_rows>0){
			header("Refresh:0; url=../pages/sign_up.php");
			echo '<script>alert("E-mail ocupat. Încercați altul!")</script>';
		}
		else{
			if($stmt = $con->prepare('INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)')) {
				$stmt->bind_param('ssss', $firstName, $lastName, $email, $password);
				$stmt->execute();
				//echo '<script type="text/javascript">alert("Salut, '.$firstName.'! Ai fost înregistrat cu succes!");</script>';
				$complete = true;
			}
			else{
				header("Refresh:0; url=../pages/sign_up.php");
				echo '<script>alert("A apărut o eroare!")</script>';
			}
		}
	}
	else{
		header("Refresh:0; url=../pages/sign_up.php");
		echo '<script>alert("A apărut o eroare!")</script>';
	}
}

$con->close();

if($complete){
	session_start();
	$_SESSION['firstName'] = $firstName;
	$_SESSION['lastName'] = $lastName;
	$_SESSION['email'] = $email;
	$_SESSION['msg'] = "Salut, $firstName! Ai fost înregistrat cu succes!";
	header("Location:../pages/hello_page.php");
}

?>