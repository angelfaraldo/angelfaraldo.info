<!DOCTYPE html>
<html>
	<meta charset="utf-8">

	<head>
		<title>&Aacute;ngel Faraldo</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<?php
		include 'functions.php';
		?>
		<script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
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



				<div id="col_picture">
				<p></p>

			
				<img src="/pics/mesa.jpg" width="100%" height="100%" frameborder="0">
				<note> photo &copy; Emilio Fonseca</note>
				<p></p>

				<!-- <iframe style="border: 0; width: 600px; height: 208px;" allow="autoplay" src="https://bandcamp.com/EmbeddedPlayer/album=2632189927/size=large/bgcol=000000/linkcol=ffffff/artwork=none/track=1256381544/transparent=false/" seamless><a href="http://angelfaraldo.bandcamp.com/album/meta-mesa"></a></iframe>
				--> 
				<p>Faraldo's music resides in <a href="http://faraldo.bandcamp.com"> faraldo.bandcamp.com</a></p>
				<p>Audiovisual documentation available in <a href="https://vimeo.com/faraldo"> vimeo.com/faraldo</a></p>

			</div>

			<div id="col_events">
				<p></p>

				<?php;
				if (empty($_GET['eventlist'])) {$eventlist = 'more';}
				else {$eventlist = $_GET['eventlist'];}

				if ($eventlist != 'less') {
					lista_de_eventos2($lengua);
					echo '<ps1>  <a href="index.php?eventlist=less">...more</a></ps1>';}

				else 
					{lista_de_eventos($lengua);
					echo '<ps1>  <a href="index.php?eventlist=more">...less</a></ps1>';}
				?>

			</div>

			<div id="bottom">			
				<?php
				about_me($lengua);
				?>

				<?php
				mi_contacto($lengua);
				?>


			<div id="foot">
				<hr>
				<img alt="Creative Commons License" style="border:0; width:75px; height:15px" src="http://i.creativecommons.org/l/by/4.0/80x15.png"/>
			</div>
		</div>

	</body>
	<script type="text/javascript">
		$(document).ready(function() {
		var showChar = 100;
		var ellipsestext = "...";
		var moretext = "more";
		var lesstext = "less";
		$('.more').each(function() {
			var content = $(this).html();

			if(content.length > showChar) {

				var c = content.substr(0, showChar);
				var h = content.substr(showChar-1, content.length - showChar);

				var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

				$(this).html(html);
			}

		});

		$(".morelink").click(function(){
			if($(this).hasClass("less")) {
				$(this).removeClass("less");
				$(this).html(moretext);
			} else {
				$(this).addClass("less");
				$(this).html(lesstext);
			}
			$(this).parent().prev().toggle();
			$(this).prev().toggle();
			return false;
		});
	});
	</script>	
</html>


		

			


