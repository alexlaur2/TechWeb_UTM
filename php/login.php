<?php

	include 'database.php';
	session_start();
		
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = $_POST['password'];
	
	$error_fields = [];

	if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error_fields[] = 'email';
	}
	if ($password == '' || strlen($password) < 5 || strlen($password) > 15 ){
		$error_fields[] = 'password';
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
		$login = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
		
		if (mysqli_num_rows($login) > 0){
            $user = mysqli_fetch_assoc($login);
            if (password_verify($password, $user['password'])){
				$_SESSION['firstName'] = $user['firstName'];
				$_SESSION['lastName'] = $user['lastName'];
				$_SESSION['email'] = $email;
                $response = [
					"message" => "Bine ați revenit!",
					"status" => true	
				];
            }
			else {
				$response = [
					'status' => false,
					'type' => 2,
					'message' => "Parola e greșită! Mai încercați o dată!"
				];
			}
        }
		else {
			$response = [
				'status' => false,
				'type' => 3,
				'message' => "Nu există asemenea utilizator!"
			];
		}
	}
	
	echo json_encode($response);	
	mysqli_close($con);

?>