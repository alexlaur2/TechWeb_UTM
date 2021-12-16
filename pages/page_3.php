<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />       
		<title>Muzicanţii din Bremen</title>
		<link rel="stylesheet" href="../css/index.css">
		<style>			
			.img3 {
				content:url("../images/page_3.png");
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
				<li><a href="about_aut.php">Despre frații Grimm</a></li>
				<li><span id="clock"></span> </li>
			</ul>
			<script src = '../js/clock.js'></script>
		</div>
		<div class="pag_tot">
			<div class="ft_text1_1">
				<p>&emsp;Merseră ei ce merseră, dar cum nu reuşiră să ajungă la Bremen într-o singură zi, înnoptară într-o pădure.
				<br>&emsp; Măgarul şi câinele îşi făcură culcuş sub un copac mare, iar cocoşul şi pisica se căţărară în el. Înainte de a apuca să adoarmă, măgarul îşi mai roti încă o dată privirea şi deodată i se păru că zăreşte în depărtare o luminiţă. Atunci le spuse tovarăşilor lui că nu foarte departe de acolo trebuie să fie o casă, căci se zăreşte o luminiţă.
				<br>&emsp;<br>&emsp; – Hai s-o întindem chiar acum într-acolo, fu de părere măgarul, că adăpostul ăsta nu prea e de soi!
				<div class="img3"></div>
				</p>
			</div>
			<div class="ft_text1_2">
				<p>&emsp;Câinele era la fel de zorit, gândind că dacă ar fi găsit pe acolo oscioare ori o bucăţică de carne i-ar fi prins tare bine.
				<br>&emsp; Porniră deci spre locul în care se vedea luminiţa şi în curând o văzură scânteind şi mai puternică. Când ajunseră în dreptul căsuţei, măgarul, fiind cel mai înalt dintre ei, se apropie de fereastră şi privi înăuntru.
				<br>&emsp;<br>&emsp; – Ce vezi acolo? îl întrebă cocoşul.
				<br>&emsp;– O masă încărcată cu mâncăruri şi nişte tâlhari care stau în jurul ei şi se înfruptă de zor.
				<br>&emsp; – Hm, aşa ceva ne-ar prinde tare bine şi nouă! răspunse cocoşul.
				<br>&emsp;<br>&emsp; Apoi începură să se gândească cu toţii în ce chip ar putea să îi pună pe tâlhari pe fugă. Măgarul îşi ridică picioarele dinainte şi le propti de marginea ferestrei, câinele sări în spinarea măgarului, pisica se căţără pe spatele dulăului, iar cocoşul zbură şi se aşeză pe capul pisicii(și reprezentarea schematică).</p>
				<button onclick="play()">Ascultă ”Muzica”</button>
				<table width=30 height=30 align="center">
					<tr>
						<td style="background-color:#D46216"></td>
					</tr>
				</table>
				<table width=50 height=50 align="center">
					<tr>
						<td style="background-color:#CEBBAE"></td>
					</tr>
				</table>
				<table width=70 height=70 align="center">
					<tr>
						<td style="background-color:#A26B22"></td>
					</tr>
				</table>
				<table width=100 height=100 align="center">
					<tr>
						<td style="background-color:#65615E"></td>
					</tr>
				</table>
				<p>Şi aşa cum erau orânduiţi, ca la un semn, porniră cu toţii să cânte. Măgarul răgea, câinele lătra, pisica mieuna, iar cocoşul cucuriga. După ce îşi încheiară cântarea, se năpustiră prin fereastră-n odaie, de făcură ţăndări toate gemurile.</p>
			</div>
		</div>
		<div class="arrow">
			<p align="left" style="display: inline;"><a href="page_2.php"><- Înapoi</a></p> <p align="right" style="display: inline;"><a href="page_4.php">Continuă -></a></p>
		</div>
   		<script src="../js/script.js"></script>
	</body>
</html>