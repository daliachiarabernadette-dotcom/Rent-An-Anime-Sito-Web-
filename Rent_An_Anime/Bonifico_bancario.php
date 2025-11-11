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
	<?php require ("header.php"); ?>

	<hr>
	<div class="row center">
		<?php
		if (!isset($_SESSION["email"])) {
			echo "Errore! Accedi per creare un ordine! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=index.php');
		} else {


			echo "<h2>Gentile Signore/a ecco gli estremi di pagamento:</h2>";
			echo "<h2>Pagamento tramite accredito su CC bancario/postale:</h2>";
			echo "<h2>UNIONE DI BANCHE ITALIANE S.P.A. VIA GIUSEPPE VERDI 816113 Genova:</h2>";
			echo "<h2>Coord. IBAN: IT12M0312680470000238051912 </h2>";

		}

		?>
	</div>
	<?php require ("footer.php"); ?>
</body>

</html>