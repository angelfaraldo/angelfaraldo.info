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

				<!--I miss you too -->
				<div class="aspect-ratio-music">
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1947005916/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<!--scelsi remix -->
				<div class="aspect-ratio-music">
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1187879847/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<!--ademen -->
				<div class="aspect-ratio-music">
					<iframe style="border: 0; width: 100%; height: 95%;" src="http://bandcamp.com/EmbeddedPlayer/track=1919132240/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<!--I miss you -->
				<div class="aspect-ratio-music">
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=2869580117/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>

				<!--Villa Ockenburg -->
				<div class="aspect-ratio-music">
					<iframe style="border: 0; width: 100%; height: 95%;" src="https://bandcamp.com/EmbeddedPlayer/album=1943385296/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" seamless></iframe>
				</div>
			</div>


			<div id="col_pictures">
				<?php
				fotos($lengua)
				?>

				<div class="aspect-ratio-pics">
					<img src="/pics/metanoimputmixer-by_Ed_Jansen-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>Meta No-Input Mixer. &copy; Ed Jansen</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/Rueda-by_Yolanda_Uriz-960x640.JPG" width="100%" height="100%" frameborder="0">
					<note>Rueda. &copy; Yolanda Uriz</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/city_sondols_toronto-by_Matteo_Marangoni-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>City Sondols in Toronto. &copy; Matteo Marangoni</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/Sondol-by_Matteo_Marangoni-960x640.jpeg" width="100%" height="100%" frameborder="0">
					<note>Testing City Sondols in The Hague. &copy; Matteo Marangoni</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/generation_kill-by_Pablo_Coello-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>With Vertixe Sonora Ensemble. &copy; Pablo Coello</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/kernel-by_Stephan_Kaffa-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>&copy; Stephan Kaffa</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/Angel-by_Dave_Sinai-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>At the Bimhuis (Amsterdam). &copy; Dave Sinai</note>
				</div>

				<div class="aspect-ratio-pics">
					<img src="/pics/ademen-by_Gemma_Llorens-960x640.jpg" width="100%" height="100%" frameborder="0">
					<note>with Yolanda Uriz. &copy; Gemma Llorens</note>
				</div>

				<!--
				<div class="aspect-ratio-pics">
					<img src="/pics/Angel-by_Mauro_Sanin-960x640.jpg" width="100%" height="100%" frameborder="0>
					<note>&copy; Mauro San&iacute;n</note>
				</div>-->
			</div>


			<div id="col_video">
				<?php
				videos($lengua);
				?>

				<!--Rueda -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/95139621" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--Retro Twain -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/71256288" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--Disparos -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/137601148" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--FS2C -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/32861140" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--Memoria -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/32792262" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--FS3A -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/19287891" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--Zubian -->
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/19286080" width="100%" height="100%" frameborder="0"></iframe>
				</div>

				<!--FS2a
				<div class="aspect-ratio-video">
					<iframe src="//player.vimeo.com/video/18492534" width="100%" height="100%" frameborder="0"></iframe>
				</div> -->
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
