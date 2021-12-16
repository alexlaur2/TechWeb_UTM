<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>Despre frații Grimm</title>
		<link rel="stylesheet" href="../css/index.css">
		<script src="../js/script.js"></script>
		<?php session_start();?>
		<style>	
			html {
				background-image: url("../images/scroll_cover.png");
				background-attachment: fixed;
				background-size: cover;
			}
			
			.jacob {
				content:url("../images/jacob.png");
				margin: 1em;
				height: auto;
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 300px;	repeat: no-repeat;
				attachment: fixed;
			}

			h4{
				color: #953D09; 
				text-align: center; 
				font-family: "Lucida Handwriting", "Brush Script MT", cursive; 
			}
		</style>
	</head>

    <body>
		<?php include 'controll.php';?>
		<script src = '../js/script.js'></script>
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
				<li><span id="clock">Clock goes here</span> </li>
			</ul>
		<script src = '../js/clock.js'></script>
		</div>
		<table align="center" border="1" width="700">
			<tr>
				<td ><i> <div class="tbl_header">Jacob Grimm</div></i></td>
				<td><div class="tbl_header"><i>Wilhelm Grimm</i></div></td>
			</tr>
			<tr>
				<td><div class="jacob"></div></td>
				<td><div class="wilhelm"></div></td></div>
			</tr>
			<tr>
				<td colspan="2"><div class="tbl_text">Frații Grimm (germană: Gebrüder Grimm), Jacob (1785–1863) și Wilhelm Grimm (1786–1859), au fost folcloriști, lingviști, filologi, doctori în drept, cunoscuți în toată lumea pentru colecția de basme publicată în două volume, care conține, printre altele, Albă ca zăpada, Croitorașul cel viteaz, Cenușăreasa, Scufița roșie și Hansel și Gretel (primul volum a apărut în 1812, iar al doilea volum în 1814). Poveștile scrise de cei doi frați au încântat copilăria multor generații, devenind pretexte cuceritoare pentru diverse ecranizări și dramatizări. Frații Grimm și-au adus contribuția la formarea limbii germane, în special prin dicționarul Deutsches Wörterbuch (Cartea cu cuvinte germane) pe care l-au scris împreună și prin prima carte de fonetică/fonologie a limbii germane, Legea lui Grimm, scrisă doar de Jacob. Dicționarul Fraților Grimm avea 33 de volume și cântărea 84 kg.</div></td>
			</tr>
		</table>
		
		<h4 align = 'center'>Cele mai cunoscute povești</h4>
		<div class="slideshow-container">
			<div class="Slides">
				<div class="numbertext">1 / 6</div>
				<img src="../images/hans.jpg" style="width:100%">
			</div>
			<div class="Slides">
				<div class="numbertext">2 / 6</div>
				<img src="../images/fluieras.jpg" style="width:100%">
			</div>
			<div class="Slides">
				<div class="numbertext">3 / 6</div>
				<img src="../images/alba.jpg" style="width:100%">
			</div>
			<div class="Slides">
				<div class="numbertext">4 / 6</div>
				<img src="../images/rapunzel.jpg" style="width:100%">
			</div>
			<div class="Slides">
				<div class="numbertext">5 / 6</div>
				<img src="../images/cenusareasa.jpg" style="width:100%">
			</div>
			<div class="Slides">
				<div class="numbertext">6 / 6</div>
				<img src="../images/scufita.jpg" style="width:100%">
			</div>
		</div>
		<script src = '../js/slider.js'></script>
   </body>

</html>