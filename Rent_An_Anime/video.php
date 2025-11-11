<html>

<body>
	<style>
		body {
			background-image: url("sfondo2.jpg");
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center;
			background-attachment: fixed;
		}
	</style>
	<?php
	include "header.php";
	?>

	<?php
	include "connessione.php";
	?>
	<center>
		<pre>
<!-- video con youtube -->
<p><h1>DIFFERENZA TRA MIRRORLESS E REFLEX</h1></p>
<iframe width="683" height="384" src="https://www.youtube.com/embed/_udA5mDN-vI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<!-- video mp4 caricato nel file -->

<p><h1>Osserva la qualita' del video prodotto dalla reflex</h1></p>
<video width="320" height="240" autoplay>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video> 
</pre>
	</center>
	<?php
	include "footer.php";
	?>
</body>

</html>