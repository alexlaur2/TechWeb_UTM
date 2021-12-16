<?php

	include 'database.php';
	session_start();

	$firstName = mysqli_real_escape_string($con, $_POST['firstName']);
	$lastName = mysqli_real_escape_string($con, $_POST['lastName']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	
	$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
	$stmt->bind_param('s', $email);
	$stmt->execute();
	$stmt->store_result();
	
    if ($stmt->num_rows > 0){
        $response = [
            'status' => false,
            'type' => 1,
            'message' => "Deja există utilizator cu asemenea e-mail!",
            'fields' => ['email']
        ];
        echo json_encode($response);
    }
    else{
        if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error_fields[] = 'email';
        }
        if ($password == '' || strlen($password) < 5 || strlen($password) > 15 ){
            $error_fields[] = 'password';
        }
        if ($confirmPassword == '' || $confirmPassword !==$password ){
            $error_fields[] = 'confirmPassword';
        }
        if($firstName == '' || is_numeric($firstName))
        {
            $error_fields[] = 'firstName';
        }
        if ($lastName == '' || is_numeric($lastName))
        {
            $error_fields[] = 'lastName';
        }

        if (!empty($error_fields)){
            $response = [
                "status" => false,
                "type" => 1,
                "message" => "Nu toate campurile au fost completate corect!"
            ];
			
            echo json_encode($response);
            die();
        }
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			
			$stmt = $con->prepare('INSERT INTO users (firstName, lastName, email, password) VALUES (?, ?, ?, ?)');
			$stmt->bind_param('ssss', $firstName, $lastName, $email, $password);
			$stmt->execute();

			$response = [
				"message" => "Utilizatorul a fost înregistrat cu succes!",
				"status" => true
			];
			echo json_encode($response);
			$_SESSION['firstName'] = $firstName; 
			$_SESSION['lastName'] = $lastName;
			$_SESSION['email'] = $email;
		}
	}

	mysqli_close($con);
?>