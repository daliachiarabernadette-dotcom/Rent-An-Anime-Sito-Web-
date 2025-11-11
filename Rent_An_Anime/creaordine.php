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

	<hr>
	<div class="row center">
		<?php
		if (!isset($_SESSION["email"])) {
			echo "Errore! Accedi con le tue credenziali per creare un ordine! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=index.php');
		} else {
			if (!isset($_POST["spedizione"]) && !isset($_POST["pagamento"]) && !isset($_POST["totale"])) {
				echo "Errore! Completa l'ordine dal carrello! Sarai reindirizzato sulla pagina del carrello.";
				header('Refresh: 3; URL=carrello.php');
			} else {
				$sql = "SELECT nome, cognome, comune, provincia, indirizzo, cap FROM Cliente WHERE email='" . $_SESSION["email"] . "'";
				$result = $mysqli->query($sql);
				while ($row = $result->fetch_assoc()) {
					$nominativo = $row["nome"] . " " . $row["cognome"];
					$indirizzo = $row["indirizzo"] . " " . $row["cap"] . " " . $row["comune"] . " (" . $row["provincia"] . ")";
				}
				list($tipospedizione, $costospedizione) = explode("_", $_POST['spedizione']);
				$totale = $_POST["totale"] + $costospedizione;
				$sql = "INSERT INTO Ordine(cliente, nominativo, indirizzo, tipospedizione, costospedizione, totale, data, stato) VALUES('" . $_SESSION["email"] . "', '" . $nominativo . "', '" . $indirizzo . "', '" . $tipospedizione . "', " . $costospedizione . ", " . $totale . ", now(), 'In lavorazione')";
				if ($mysqli->query($sql) === TRUE) {
					$idordine = $mysqli->insert_id;
					$select = "SELECT Carrello.cliente, Carrello.prodotto, Carrello.quantita, Anime.ID, Anime.prezzo FROM Carrello, Anime WHERE Carrello.cliente='" . $_SESSION["email"] . "' AND Carrello.prodotto=Anime.ID";
					$result = $mysqli->query($select);
					while ($row = $result->fetch_assoc()) {
						$quantita = $row["quantita"];
						$totale = $quantita * $row["prezzo"];
						$insert = "INSERT INTO ProdottoOrdine VALUES(" . $idordine . ", " . $row["prodotto"] . ", " . $row["quantita"] . ", " . $row["prezzo"] . ", " . $totale . ")";
						$mysqli->query($insert);
						$update = "UPDATE Anime SET quantita=quantita-" . $quantita . " WHERE ID=" . $row["prodotto"];
						$mysqli->query($update);
						$delete = "DELETE FROM Carrello WHERE Cliente='" . $_SESSION["email"] . "'";
						$mysqli->query($delete);
					}
					echo "<br><h1>Ordine creato con successo! Sarai reindirizzato sulla pagina per la scelta della modalità di pagamento</h1>";
					header('Refresh: 3; URL=ordine.php?id=' . $idordine);
				}
			}
		}
		?>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>