<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<head>
		<title>&Aacute;ngel Faraldo</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<?php
		include 'functions.php';
		?>
	</head>

	<body>

		<?php;
		if(empty($_GET['lengua'])){
				$lengua = 'EN';}
		else{
			$lengua = $_GET['lengua'];
		}
		?>

		<div id='main'>
			
			<h1>&Aacute;ngel Faraldo</h1>

			<div id="col_events">
		
				<?php
				lista_de_eventos($lengua);
				?>
				</div>


			<div id="col_picture">
			
				<img src="/pics/mesa.jpg" width="100%" height="100%" frameborder="0">
				<note> photo &copy; Emilio Fonseca</note>
			
			</div>


			<div id="bottom">

				<!--
				<div id='lang'>
					<a href="index.php?lengua=EN">english</a>
					<a href="index.php?lengua=ES">espa&ntilde;ol</a>
					<a href="index.php?lengua=GA">galego</a>
				</div>
			-->

				<?php
				about_me($lengua);
				?>

				<?php
				mi_contacto($lengua);
				?>
			</div>


			<div id="foot">
				<hr>
				<img alt="Creative Commons License" style="border:0; width:75px; height:15px" src="http://i.creativecommons.org/l/by/4.0/80x15.png"/><note> ángel faraldo</note>
			</div>
		</div>
	</body>
</html>
