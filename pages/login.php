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

            <form id="login_form" action="" method="POST">
                <div class="form-item">
                    <input type="email" name="email" id="email" placeholder="E-mail">
                </div>
				<p class="msg none"></p>
                <div class="form-item">
                    <input type="password" name="password" id="password" placeholder="Introduceți parola">
                </div>

                <div class="form-btns">
                    <button id="login" type="submit">Logați-vă</button>
                    <div class="options">
                        Nu aveți account? <a href="sign_up.php">Înregistrați-vă</a>!
                    </div>
                </div>
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<script src="../js/login.js"></script>
			</form>
        </div>
        
   </body>
</html>