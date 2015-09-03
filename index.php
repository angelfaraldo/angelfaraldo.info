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

		<div id="side_events">
			<?php
			lista_de_eventos($lengua);
			?>
	    </div>

		<div id='main'>
			<h1>&Aacute;ngel Faraldo</h1>
				<?php
				about_me($lengua);
				?>

			<div id="col_music">
				<?php
				musica($lengua);
				?>

				<div class="aspect-ratio-2">
					<!--I miss you too -->
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1947005916/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<div class="aspect-ratio-2">
					<!--scelsi remix -->
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1187879847/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<div class="aspect-ratio-2">
					<!--ademen -->
					<iframe style="border: 0; width: 100%; height: 95%;" src="http://bandcamp.com/EmbeddedPlayer/track=1919132240/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>


				<div class="aspect-ratio-2">
					<!--I miss you -->
					<iframe style="border: 0; width: 100%; height: 95%;"
					src="https://bandcamp.com/EmbeddedPlayer/album=2869580117/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<div class="aspect-ratio-2">
					<!--Villa Ockenburg -->
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1943385296/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

			</div>



			<div id="col_video">
				<?php
				videos($lengua);
				?>

				<div class="aspect-ratio">
					<!--Rueda -->
					<iframe src="//player.vimeo.com/video/95139621" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--Retro Twain -->
					<iframe src="//player.vimeo.com/video/71256288" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--FS2C -->
					<iframe src="//player.vimeo.com/video/32861140" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--FS3A -->
					<iframe src="//player.vimeo.com/video/19287891" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--Disparos -->
					<iframe src="//player.vimeo.com/video/137601148" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--Memoria -->
					<iframe src="//player.vimeo.com/video/32792262" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--Zubian -->
					<iframe src="//player.vimeo.com/video/19286080" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<div class="aspect-ratio">
					<!--FS2a -->
					<iframe src="//player.vimeo.com/video/18492534" width="100%" height="100%" frameborder="0"></iframe>
				</div>
			</div>

			<div id="col_pictures">
				<?php
				fotos($lengua)
				?>

				<div class="aspect-ratio-3">
					<img src="/pics/CitySondols2.jpeg"width="100%" height="100%" frameborder="0" alt="City Sondols in The Hague">
					<note>Testing City Sondols in The Hague. &copy; Matteo Marangoni</note>
				</div>

				<div class="aspect-ratio-3">
					<img src="/pics/CitySondols2.jpeg"width="100%" height="100%" frameborder="0" alt="City Sondols in The Hague">
					<note>&copy; Matteo Marangoni</note>
				</div>

				<div class="aspect-ratio-3">
					<img src="/pics/CitySondols2.jpeg"width="100%" height="100%" frameborder="0" alt="City Sondols in The Hague">
					<note>&copy; Matteo Marangoni</note>
				</div>
			</div>

			<div id="bottom">
				<?php
				mi_contacto($lengua);
				?>
			</div>

			<div id="foot">
				<hr>
				<img alt="Creative Commons License" style="border:0; width:75px; height:15px" src="http://i.creativecommons.org/l/by/4.0/80x15.png"/><note> except where otherwise noted.</note>
			</div>
		</div>
	</body>
</html>
