<?php
	include 'database.php';
	session_start();

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$text_contact = mysqli_real_escape_string($con, $_POST['text_contact']);

   
    
    if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_fields[] = 'email';
    }
	
	if ($username == '' || is_numeric($username)){
		$error_fields[] = 'username';
    }
	
	if ($username == '' ){
		$error_fields[] = 'text_contact';
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
		
		$query = "INSERT INTO contact(email, username, contact_text) VALUES ('$email', '$username', '$text_contact')";
		$stmt = $con->prepare('INSERT INTO contact(email, username, contact_text) VALUES (?, ?, ?)');
		$stmt->bind_param('sss', $email, $username, $text_contact);
		$stmt->execute();

		$response = [
			"message" => "Mesajul a fost trimis!",
			"status" => true
		];
		echo json_encode($response);		
	}

	mysqli_close($con);
?>