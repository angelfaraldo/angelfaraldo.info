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
		<div id='lang'>
			<a href="index.php?lengua=EN">english</a>
			<a href="index.php?lengua=ES">espa&ntilde;ol</a>
			<a href="index.php?lengua=GA">galego</a>
		</div>

		<?php;
		if(empty($_GET['lengua'])){
				$lengua = 'EN';}
		else{
			$lengua = $_GET['lengua'];
		}
		?>

		<div id="side">
			<?php
			lista_de_eventos($lengua);
			?>
	    </div>

		<div id='main'>
			<h1>&Aacute;ngel Faraldo</h1>
				<?php
				about_me($lengua);
				?>

			<div id="side2">
				<?php
				videos($lengua);
				?>

				<div class="aspect-ratio">
					<iframe src="//player.vimeo.com/video/32861140" width="250" height="140" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<iframe src="//player.vimeo.com/video/19287891" width="250" height="140" frameborder="0"></iframe>
				</div>
			</div>

			<div id="side2">
				<?php
				fotos($lengua);
				?>

				<div class="aspect-ratio">
					<iframe src="//player.vimeo.com/video/32861140" width="250" height="140" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<iframe src="//player.vimeo.com/video/32861140" width="250" height="140" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<iframe src="//player.vimeo.com/video/19287891" width="250" height="140" frameborder="0"></iframe>
				</div>
			</div>

			<div id="side2">
				<?php
				musica($lengua);
				?>

				<div class="aspect-ratio">
					<iframe  style="border: 0; width: 200px; height: 200px;" src="https://bandcamp.com/EmbeddedPlayer/album=1947005916/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" width="50%" height="100%"></iframe>
				</div>
			</div>
		</div>
		<?php
			//<h3>City Sondols</h3>
			// <img class="pic" src="pics/pic2.jpg">
			//mi_contacto($lengua);
			?>

		<hr>
			<div id=pie>
				<img class="foot" alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png"/>
			</div>
		</div>
	</body>
</html>
