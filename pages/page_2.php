<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>Muzicanţii din Bremen</title>
		<link rel="stylesheet" href="../css/index.css">
		<style>
			.imag2 {
				content:url("../images/page_2_1.png");
				margin: 1em;
				max-width: 100%;
				height: auto;
				display: block;
				margin-left: auto;
				margin-right: auto;
				width: 70%;	repeat: no-repeat;
				attachment: fixed;
			}
		</style>
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
		<div class="pag_tot">
			<div class="ft_text1_1">
				<p>&emsp;Câinelui îi plăcu propunerea, cum era să nu-i placă!
				<br>&emsp; Şi plecară amândoi mai departe. Merseră ei aşa, până întâlniră în drum o pisică(iarăși pătrat).</p>
				<table width=50 height=50 align="right">
					<tr>
						<td style="background-color:#CEBBAE"></td>
					</tr>
				</table>
				<p>O arătare jalnică, nu alta!…
				<br>&emsp;<br>&emsp; – Ei, de ce eşti atât de tristă? o întrebă măgarul.
				<br>&emsp; – Cui îi mai arde de veselie, când îi ajunge funia la par? zise mâţa. Pentru că anii bătrâneţii m-au cam ajuns de şale şi mi s-au tocit colţii, iar acum tot ce îmi place cel mai mult e să dorm pe cuptorul încins, stăpâna m-a alungat de acasă. Aşa că stau şi mă socot: încotro s-o apuc eu acum?
				<br>&emsp; – Hai cu noi la Bremen, că la serenade nu te întrece nimeni. Cu siguranţă o să-ţi găseşti şi tu un loc în taraful oraşului!</p>
				<div class="imag2"></div>
			</div>
			<div class="ft_text1_2">
				<p>&emsp;Pisica socoti că sfatul acesta nu-i rău deloc şi se alătură trupei. Şi au tot mers fugarii, au tot mers, şi trecând ei prin faţa unei curţi, au văzut cocoţat pe o poartă un cocoş (ultimul pătrat)</p>
				<table width=30 height=30 align="right">
					<tr>
						<td style="background-color:#D46216"></td>
					</tr>
				</table>
				<p>care striga „cu-curigu” din toate puterile lui.
				<br>&emsp; – Ce ţi s-a întâmplat de strigi aşa, mă cocoşule? îl întrebă măgarul.
				<br>&emsp; – Iaca, dau şi eu de veste c-o să fie vreme frumoasă mâine, dar la ce bun!… spuse cu tristeţe cocoşul. Mâine e duminică şi ne vin oaspeţi. Dar vezi că stăpâna mea nu se mai arată milostivă faţă de mine; i-a spus bucătăresei c-ar pofti să mă mănânce la masă, în ciorbă, aşa că în seara asta o să mă scurteze de cap… Acum înţelegi de ce strig aşa?… Strig şi eu cât mai pot, cât mai sunt în viaţă!…
				<br>&emsp; – Da’ de ce te necăjeşti tu pentru atâta lucru?…îl dojeni măgarul. Hai mai bine cu noi la Bremen. Ai un glas puternic şi, dacă te-ai învoi să cânţi cu noi, ne-ar asculta lumea cu gura căscată, nu alta!…
				<br>&emsp;<br>&emsp; Cocoşul găsi propunerea urecheatului cât se poate de bună şi porniră tuspatru la drum.</p>
			</div>
		</div>
		<br>&emsp;<br>&emsp;<br>&emsp;
		<div class="arrow">
			<p align="left" style="display: inline;"><a href="page_1.php"><- Înapoi</a></p> <p align="right" style="display: inline;"><a href="page_3.php">Continuă -></a></p>
		</div>
   </body>
</html>