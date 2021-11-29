<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<title>Muzicanţii din Bremen</title>
		<link rel="stylesheet" href="../css/index.css">
		<?php session_start();?>
	</head>

    <body>
		<?php if(empty($_SESSION['firstName'])){
			header("Location:../pages/login.php");
		}?>
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
				<p>&emsp; A fost odată un om tare sărman, care avea un măgar (din cauza abilităților reduse în desen toți personajii vor fi reprezentați prin pătrate)</p>
				<table width=100 height=100 align="left">
					<tr>
						<td style="background-color:#65615E"></td>
					</tr>
				</table>
				<p>ce de ani de zile îi tot căra la moară saci plini cu grăunţe. Dar, de la o vreme, bietului animal i se împuţinaseră puterile şi nu mai era bun de nicio ispravă. De aceea, stăpânul lui se hotărî să nu mai strice bunătate de nutreţ pe dânsul…
				<br>&emsp; Măgarul pricepu de îndată că nu îl aşteaptă vremuri prea bune şi, fără să mai stea mult pe gânduri, îşi luă copitele la spinare şi plecă spre oraşul Bremen. Nu ştiu ce îi venise lui în gând că acolo s-ar putea face muzicantul oraşului. După ce merse el o bucată de vreme, iată că dădu peste un ogar(continuăm să utilizăm pătrate) </p>
				<table width=70 height=70 align="right">
					<tr>
						<td style="background-color:#A26B22"></td>
					</tr>
				</table>
				<p>care zăcea întins la marginea drumului, răsuflând din greu.</p>
			</div>
			<div class="ft_text1_2">
				<p>&emsp;– Ce gâfâi aşa? îl întrebă măgarul.
				<br>&emsp; – Vai de mine, răspunse câinele. Pentru că sunt bătrân şi slăbesc pe zi ce trece, iar la vânătoare nu mă mai dovedesc bun de nicio ispravă, mi-am luat tălpăşiţa de acasă. Dar vorba e, cu ce am să-mi câştig eu pâine de acum înainte?
				<br>&emsp; – Ştii ceva, îi zise măgarul, eu mă duc la Bremen să mă fac muzician. Hai cu mine, că s-o mai găsi şi pentru tine un loc în taraf! Eu am să cânt din lăută, iar tu ai să baţi la toba cea mare.</p>
				<div class="img1"></div>
			</div>
			<div class="arrow">
				<p align="right"><a href="page_2.php">Continuă -></a></p>
			</div>
		</div>
   </body>
</html>