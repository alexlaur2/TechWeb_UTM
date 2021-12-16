<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Înregistrare</title>
		<link rel="stylesheet" href="../css/forms.css">
		<?php session_start();?>
	</head>

    <body>
		
		<?php include 'controll2.php';?>
				
        <div class="container">
        	<h2>Înregistrare</h2>
		    <p>Completați forma pentru a înregistra un nou utilizator</p>
            <form id="register_form" action="" method="POST">
                <div class="form-item-username" method="POST">
                    <input type="text" name="firstName" id="firstName" placeholder="Prenume">
                    <input type="text" name="lastName" id="lastName" placeholder="Nume">
                </div>
				<p class="msg none"></p>
                <div class="form-item">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </div>

                <div class="form-item">
                    <input type="password" name="password" id="password" placeholder="Introduceți parola">
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmați parola">
                </div>
				<div id="result"></div>	
                <div class="form-btns">
                    <button id="signup" name="signup" type="submit" >Înregistrați</button>
                    <div class="options">
                        Deja aveți account? <a href="login.php">Logați-vă</a>!
                    </div>
                </div>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<script src="../js/sign_up.js"></script>
            </form>
        </div>
        
   </body>
</html>