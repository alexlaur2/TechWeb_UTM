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
		<div class="ft_text1_1">
			<p>&emsp;De spaimă, tâlharii săriră în sus ca nişte apucaţi şi, crezând că dădură stafiile peste dânşii, fugiră cu toţii în pădure.
			<br>&emsp; Cei patru prieteni se aşezară la masă, în locul tâlharilor, şi se ghiftuiră straşnic. După ce se ospătară, cei patru muzicanţi, stinseră luminile şi-şi aleseră culcuşul, fiecare după pofta inimii şi după cum îi era firea.
			<div class="img4"></div>
			<br>&emsp; Măgarul se culcă într-un maldăr de gunoi, câinele se făcu covrig în dreptul uşii, pisica se tolăni pe cuptor, iar cocoşul se cocoţă sub o grindă.
			<br>&emsp; După ce trecu de miezul nopţi, tâlharii văzură de departe că în casă nu mai ardea nicio lumină. Atunci căpetenia le zise:</p>
		</div>
		<div class="ft_text1_2">
			<p>&emsp;– Mi se pare că ne-am cam speriat de pomană!… S-ar cuveni să ne ruşinăm că am fost atât de slabi de înger!
			<br>&emsp;<br>&emsp; Muzicanţii din Bremen - cei patru prieteni, unul peste altul, în faţa ferestreiŞi trimise pe unul de-al lor să vadă ce se mai petrece pe lângă casă. Iscoada nu desluşi nimic care să-l pună pe gânduri, aşa că intră în bucătărie şi vru să aprindă o lumânare. Dând de ochii scânteietori ai pisicii, îi luă drept cărbuni încinşi şi apropie de ei un băţ de chibrit, ca să ia un foc. Dar mâţa nu pricepu de glumă! Îi sări la obraji şi începu să îl zgârie şi să îl scuipe. Tâlharul trase o sperietură zdravănă şi vru să iasă afară pe uşa din dos. Dar nu scăpă cu una, cu două. Câinele, care sta culcat în dreptul ei, se repezi şi îl muşcă zdravăn de picior. Tâlharul o luă atunci la goană prin curte, dar când trecu de maldărul de gunoi, măgarul îi arse o copită, de văzu stele verzi. Iar cocoşul, trezit de toată hărmălaia de afară, începu să strige de pe grindă: „Cu-curigu, cu-curigu!”…
			<br>&emsp; Atunci tâlharul nu se opri decât înaintea căpeteniei sale şi îi povesti toate cele prin câte trecuse:
			<br>&emsp;<br>&emsp; – Vai de noi!… În casă s-a cuibărit o cotoroanţă afurisită care mi-a zgâriat obrazul cu nişte gheare lungi şi ascuţite. Iar la uşă, cine crezi că stătea?… Unul cu un cuţit, pe care mi l-a înfipt în picior!… Socoteam că am scăpat! Da’ vezi să nu scap eu aşa de uşor! În ogradă, o namilă neagră m-a pocnit cu o măciucă, iar sus, cocoţat pe acoperiş, sta însuşi judecătorul, care tot striga: „Aduceţi-mi-l de îndată pe tâlhar!”…
			<br>&emsp;<br>&emsp; Din seara aceea, tâlharii nu au mai cutezat să se apropie de casă, iar cei patru muzicanţi din Bremen s-au simţit atât de bine acolo, încât nu s-au mai îndurat să plece…</p>
		</div>
		<br>&emsp;<br>&emsp;<br>&emsp;<br>&emsp;<br>&emsp;
		<div class="arrow">
			<p align="left" style="display: inline;"><a href="page_3.php"><- Înapoi</a></p> 
		</div>
   </body>
</html>