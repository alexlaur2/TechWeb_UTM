<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" href="../css/forms.css">
		<?php session_start();?>
	</head>

    <body>
		<?php include 'controll.php';?>
		<script src="../js/script.js"></script>
		<button onclick="Nav_bar()" id="btn">Ascunde bara de navigare</button>
		<div id="cont">
			<ul>
				<li>  <span class='account'><button class="dropbtn"><?php echo "Salut, ", $_SESSION["firstName"];?></button><div class="dropdown-content">
						<a href="contact.php">Contact</a>
						<a href="../php/logout.php">Delogare</a>
					  </div>
					</span>  
				</li>				
				<li><a href="page_1.php">1-a pagină</a></li>
				<li><a href="page_2.php">a 2-a pagină</a></li>
				<li><a href="page_3.php">a 3-a pagină</a></li>
				<li><a href="page_4.php">a 4-a pagină</a></li>
				<li><a href="about_aut.php">Despre frații Grimm</a></li><br>&emsp;<br>&emsp;
				<li><span id="clock"></span> </li>
			</ul>
			<script src = '../js/clock.js'></script>
		</div>
        <div class="container2">
        	<h2>Contact</h2>

            <form action="" id="contact_form" method="POST">
                <div class="form-item">
                    <input type="email" name="email" id="email" value="<?php echo $_SESSION["email"]; ?>" placeholder="E-mail">
                </div>

                <div class="form-item">
                    <input type="text" name="username" id="username" placeholder="Nume" value="<?php echo $_SESSION["firstName"], ' ', $_SESSION["lastName"]; ?>">
                </div>

				<p class="msg none"></p>

                <div class="form-item_contact">
					<textarea name="text_contact" id="text_contact" placeholder="Scrieți mesaj administrației, maxim 300 de caractere" rows="15" cols="50"></textarea>
                </div>

                <div class="form-btns">
                    <button id="contact_send" type="submit">Trimiteți</button>
                </div>
				
				<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.js"></script>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
				<script src="../js/contact.js"></script>
            </form>
        </div>
		
   </body>
</html>