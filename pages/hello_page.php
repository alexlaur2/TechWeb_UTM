<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />       
		<title>Bună ai venit!</title>
		<link rel="stylesheet" href="../css/index.css">
		<?php session_start();?>
	</head>
		<div class="popup"><?php if($_SESSION['msg']){
									echo $_SESSION['msg'];
									$_SESSION['msg'] = '';
									header("Refresh:3; url=../pages/page_1.php");
								}	
								else{
									header("Location:../pages/page_1.php");
								}
			?>
		</div>
    <body>
		
	</body>
</html>