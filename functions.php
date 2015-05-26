<?php
function lista_de_eventos($lang='EN'){
	$con=mysqli_connect("rdbms.strato.de", "U1670230", "Ang915768657", "DB1670230");
		
	if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$year = date('Y');
	$month = date('m');
	$day = date('d');
	$result = mysqli_query($con,"SELECT * FROM EVENTS ORDER BY FECHA DESC");
	
	if ($lang == 'ES'){
		echo utf8_encode("<h2>noticias y eventos</h2>");}
	if ($lang == 'GA'){
		echo utf8_encode("<h2>novas e eventos</h2>");}
	if ($lang == 'EN'){
		echo utf8_encode("<h2>news and events</h2>");}

	while($row = mysqli_fetch_array($result)) {
		if ($row['lang'] == $lang) {
			if ($row['link'] != NULL) {
				if ($year <= substr($row['fecha'],0,4) AND $month <= substr($row['fecha'],5,7)) { //solo filtra por año y mes!
					echo utf8_encode("<ps2><strong>" . "<a href=" . $row['link'] . ">" .  $row['fecha'] . "</strong></a>");
  					echo utf8_encode(" " . $row['evento'] . ". " . $row['venue'] . " (" .$row['town'] . "). </ps2>");
				}
				else {
					echo utf8_encode("<ps1><strong>" . "<a href=" . $row['link'] . ">" .  $row['fecha'] . "</strong></a>");
					echo utf8_encode(" " . $row['evento'] . ". " . $row['venue'] . " (" .$row['town'] . "). </ps1>");
				}
			}
			else {
				echo utf8_encode("<ps1><strong>" . $row['fecha'] . " </strong>" . $row['evento'] . ". " . $row['venue'] . " (" .$row['town'] . "). </ps1>");
			}	
		}
	}

	mysqli_close($con);
}


function about_me($lang='EN'){
	$con=mysqli_connect("rdbms.strato.de", "U1670230", "Ang915768657", "DB1670230");

	if (mysqli_connect_errno()) {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$result = mysqli_query($con,"SELECT * FROM bios");

	while($row = mysqli_fetch_array($result)) {
		if ($row['lang'] == $lang) {
  		echo utf8_encode("<p>" . $row['bio'] . "</p>");
		}
	}
	mysqli_close($con);
}

function mi_obra($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='obra'>obra</h2>");
		echo "<p>En construcci&oacute;n. Entretanto puedes visitar mi <a href=http://www.angelfaraldo.info/site/intro/intro.html> anterior p&aacute;gina web</a>.</p>";
	}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='obra'>obra</h2>");
		echo "<p>En construcci&oacute;n. Entretanto podes visitar a mi&ntilde;a <a href=http://www.angelfaraldo.info/site/intro/intro.html>antiga p&aacute;xina web</a>.</p>";
	}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='obra'>work</h2>");
		echo "<p>Under construction. In the meantime you can have a look at <a href=http://www.angelfaraldo.info/site/intro/intro.html>my previous website</a>.</p>";
	}
}

function mi_contacto($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='contacto'>contacto</h2>");
		echo "<p>angelfaraldo [arroba] gmail [punto] com</p>";}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='contacto'>contacto</h2>");
		echo "<p>angelfaraldo [arroba] gmail [punto] com</p>";}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='contacto'>contact</h2>");
		echo "<p>angelfaraldo [at] gmail [dot] com</p>";}
}

?>