<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <head>
		<title>Ángel Faraldo</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<?php 
		include 'functions.php';
		?>
  </head>
		
	<body>
		<div id='lang'>
			<a class="lan" href=en.html>english</a> 
			<a class="lan" href=es.html>español</a> 
			<a class="lan" href=gal.html>galego</a>
		</div>
		
		<div id="side">
					<?php 
					lista_de_eventos();
					?>
	  </div>
		
		<div id='main'>
			<h1>Ángel Faraldo</h1>
				<?php
				about_me();
				mi_obra()
				?>
				
					<p>...under construction / en construcción...</p>
			
			<?php		
			//<img class="pic" src="pics/pic.jpg"> 
			
			//<h3>City Sondols</h3>
			// <img class="pic" src="pics/pic2.jpg"> 
			?>

		<?php 
		mi_contacto();
		?>
		<p>angelfaraldo [at] gmail [dot] com</p>		
		
		<hr>
		
			<div id=pie>
				<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
					<img class="foot" alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/4.0/80x15.png"/>
			
			</div>
		</div>	
	</body>
</html>