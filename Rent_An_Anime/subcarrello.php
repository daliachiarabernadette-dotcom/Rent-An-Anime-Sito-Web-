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
	<div class="row center">
		<?php
		if (!isset($_SESSION["email"])) {
			echo "Errore! Accedi per gestire il carrello! Sarai reindirizzato sulla homepage.";

			include "footer.php";


			header('Refresh: 3; URL=index.php');
		} else {
			$sql = "SELECT ID FROM Anime WHERE ID=" . $_GET["prodotto"];
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				$sql = "SELECT cliente, prodotto FROM Carrello WHERE cliente='" . $_SESSION["email"] . "' AND prodotto=" . $_GET["prodotto"];
				$result = $mysqli->query($sql);
				if ($result->num_rows > 0) {
					$sql = "UPDATE Carrello SET quantita=quantita-1 WHERE cliente='" . $_SESSION["email"] . "' AND prodotto=" . $_GET["prodotto"];
					if ($mysqli->query($sql) === TRUE)
						header('Refresh: 0; URL=carrello.php');
				} else {
					echo "Errore! Prodotto non presente nel tuo carrello! Sarai reindirizzato sulla pagina del carrello.";
					include "footer.php";
					header('Refresh: 3; URL=carrello.php');
				}
			} else {
				echo "Errore! Prodotto non esistente! Sarai reindirizzato sulla homepage.";

				include "footer.php";

				header('Refresh: 3; URL=index.php');
			}
		}
		?>
	</div>
</body>

</html>