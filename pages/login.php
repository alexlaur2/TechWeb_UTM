<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Logare</title>
		<link rel="stylesheet" href="../css/forms.css">
		<?php session_start();?>
	</head>

    <body>
		<?php if(isset($_SESSION["firstName"])) {
				header("Location:../pages/page_1.php");}?>
        <div class="container">
        	<h2>Logare</h2>

            <form action="../php/login.php" method="POST">
                <div class="form-item">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </div>

                <div class="form-item">
                    <input type="password" name="password" id="password" placeholder="Introduceți parola">
                    <span class="format_pass">
                        5-15 caractere
                    </span>
                </div>

                <div class="form-btns">
                    <button class="login" type="submit">Logați-vă</button>
                    <div class="options">
                        Nu aveți account? <a href="sign_up.php">Înregistrați-vă</a>!
                    </div>
                </div>
            </form>
        </div>
        <script src="../js/login.js"></script>
   </body>
</html>