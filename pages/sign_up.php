<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Înregistrare</title>
		<link rel="stylesheet" href="../css/forms.css">
		<?php session_start();?>
	</head>

    <body>
		<?php if(isset($_SESSION["firstName"])) {
				header("Location:../pages/page_1.php");}?>
        <div class="container">
        	<h2>Înregistrare</h2>
		    <p>Completați forma pentru a înregistra un nou utilizator</p>
			
            <form action="../php/signup.php" method="POST">
                <div class="form-item-username">
                    <input type="text" name="firstName" id="firstName" placeholder="Prenume">
                    <input type="text" name="lastName" id="lastName" placeholder="Nume">
                </div>
				<span class="format_pass_us">
					Sunt disponibile doar litere și spații 
				</span>
                <div class="form-item">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </div>

                <div class="form-item">
                    <input type="password" name="password" id="password" placeholder="Introduceți parola">
                    <span class="format_pass">
                        5-15 caractere
                    </span>
                    <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmați parola">
                </div>

                <div class="form-btns">
                    <button class="signup" type="submit" >Înregistrați</button>
                    <div class="options">
                        Deja aveți account? <a href="login.php">Logați-vă</a>!
                    </div>
                </div>
            </form>
        </div>
        <script src="../js/sign_up.js"></script>
   </body>
</html>