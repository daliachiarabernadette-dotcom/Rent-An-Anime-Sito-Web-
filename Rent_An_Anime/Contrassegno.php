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
			echo "<h2>Gentile Signora/e le ricordiamo che il metodo di pagamento<br> di beni acquistati a distanza, consente di pagare al momento<br> del suo arrivo a destinazione.</h2>";

		}
		?>
	</div>
	<?php require ("footer.php"); ?>
</body>

</html>