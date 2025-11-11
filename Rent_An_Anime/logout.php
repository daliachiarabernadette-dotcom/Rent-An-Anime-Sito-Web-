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
	echo '<hr>';
	echo "<center>";
	echo "<h1>GRAZIE PER AVER VISITATO IL NOSTRO SITO</h1></br>";
	echo "<h1>ARRIVEDERCI!</h1>";

	echo "<h1>Sarai reindirizzato sulla homepage </h1>";
	header('Refresh: 3; URL=index.php');

	echo "</center>";
	session_destroy();
	echo '<pre>';




	echo '</pre>';

	include "footer.php";
	?>
</body>

</html>