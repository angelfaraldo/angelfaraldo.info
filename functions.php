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
		echo utf8_encode("<h2>eventos</h2>");}
	if ($lang == 'GA'){
		echo utf8_encode("<h2>eventos</h2>");}
	if ($lang == 'EN'){
		echo utf8_encode("<h2>events</h2>");}

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
					echo ("\n");

				}
			}
			else {
				echo utf8_encode("<ps1><strong>" . $row['fecha'] . " </strong>" . $row['evento'] . ". " . $row['venue'] . " (" .$row['town'] . "). </ps1>");
				echo ("\n");
			}
			echo utf8_encode("\n");

		}
	}

	mysqli_close($con);
}

function about_me($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='obra'>palabras</h2>");
	}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='obra'>palabras</h2>");
	}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='obra'>words</h2>");
	}

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

function videos($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='obra'>documentaci&oacute;n</h2>");
	}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='obra'>documentaci&oacute;n</h2>");
	}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='obra'>documentation</h2>");
	}
}

function fotos($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='obra'>im&aacute;genes</h2>");
	}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='obra'>imaxes</h2>");
	}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='obra'>pictures</h2>");
	}
}

function musica($lang='EN'){
	if ($lang == 'ES'){
		echo utf8_encode("<h2 id='obra'>m&uacute;sica</h2>");
	}
	if ($lang == 'GA'){
		echo utf8_encode("<h2 id='obra'>m&uacute;sica</h2>");
	}
	if ($lang == 'EN'){
		echo utf8_encode("<h2 id='obra'>music</h2>");
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
