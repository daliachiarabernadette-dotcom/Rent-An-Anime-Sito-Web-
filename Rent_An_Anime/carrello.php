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
			echo "Errore! Accedi per visualizzare il carrello! Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		} else {
			$sql = "SELECT Carrello.cliente, Carrello.prodotto, Carrello.quantita as quantita, Anime.ID, Anime.quantita as animedisponibili 
				FROM Carrello, Anime WHERE Carrello.cliente='" . $_SESSION["email"] . "' AND Carrello.prodotto=Anime.ID";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if ($row["quantita"] > $row["animedisponibili"]) {
						$update = "UPDATE Carrello SET quantita=" . $row["animedisponibili"] . " WHERE cliente='" . $_SESSION["email"] . "' AND prodotto=" . $row["ID"];
						$mysqli->query($update);
					}
					if ($row["quantita"] < 1) {
						$update = "UPDATE Carrello SET quantita=1 WHERE cliente='" . $_SESSION["email"] . "' AND prodotto=" . $row["ID"];
						$mysqli->query($update);
					}
					if ($row["animedisponibili"] < 1) {
						$delete = "DELETE FROM Carrello WHERE prodotto=" . $row["ID"];
						$mysqli->query($delete);
					}
				}
			}
			$sql = "SELECT Carrello.cliente, Carrello.prodotto, Carrello.quantita as quantita, Anime.ID, Anime.nome, Anime.audio, Anime.sottotitoli, Anime.data_uscita, Anime.stagione, Anime.studio, Anime.genere, Anime.episodi, Anime.durata, Anime.quantita as animedisponibili, Anime.prezzo
			FROM Carrello, Anime WHERE Carrello.cliente='" . $_SESSION["email"] . "' AND Carrello.prodotto=Anime.ID";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				$totale = 0;

				echo "<h2>Carrello</h2>";

				echo '<table class="center table-styled" style="width:100%">';
				echo
					'<tr>
						<th class="contorno">Prodotto</th>
						<th class="contorno">Prezzo</th>
						<th class="contorno">Quantità</th>
						<th class="contorno">Totale</th>
						<th class="contorno">Aggiungi</th>
						<th class="contorno">Diminuisci</th>
						<th class="contorno">Cancella</th>
					</tr>';
				while ($row = $result->fetch_assoc()) {
					if ($row["nome"] != NULL) {
						echo '<tr>
						<td><strong>Nome:</strong> <span>' . $row["nome"] . '</span><br>' .
							'<strong>Audio:</strong> <span>' . $row["audio"] . '</span><br>' .
							'<strong>Sottotitoli:</strong> <span>' . $row["sottotitoli"] . '</span><br>' .
							'<strong>Data di uscita:</strong> <span>' . $row["data_uscita"] . '</span><br>' .
							'<strong>Stagione:</strong> <span>' . $row["stagione"] . '</span><br>' .
							'<strong>Studio:</strong> <span>' . $row["studio"] . '</span><br>' .
							'<strong>Genere:</strong> <span>' . $row["genere"] . '</span><br>' .
							'<strong>Episodi:</strong> <span>' . $row["episodi"] . '</span><br>' .
							'<strong>Durata:</strong> <span>' . $row["durata"] . '</span></td>';
					} else {
						echo '<tr>
						<td><strong>Nome:</strong> <span>' . $row["nome"] . '</span><br>' .
							'<strong>Audio:</strong> <span>' . $row["audio"] . '</span><br>' .
							'<strong>Sottotitoli:</strong> <span>' . $row["sottotitoli"] . '</span><br>' .
							'<strong>Data di uscita:</strong> <span>' . $row["data_uscita"] . '</span><br>' .
							'<strong>Stagione:</strong> <span>' . $row["stagione"] . '</span><br>' .
							'<strong>Studio:</strong> <span>' . $row["studio"] . '</span><br>' .
							'<strong>Genere:</strong> <span>' . $row["genere"] . '</span><br>' .
							'<strong>Episodi:</strong> <span>' . $row["episodi"] . '</span><br>' .
							'<strong>Durata:</strong> <span>' . $row["durata"] . '</span></td>';

					}
					echo '<td class="contorno">' . $row["prezzo"] . ' Euro</td>';
					echo '<td class="contorno">' . $row["quantita"] . '</td>';
					echo '<td class="contorno">' . $row["prezzo"] * $row["quantita"] . ' Euro</td>';
					echo '<td class="contorno"><a href="addcarrello.php?prodotto=' . $row["ID"] . '"><button class="pulsante">+</button></a></td>';
					echo '<td class="contorno"><a href="subcarrello.php?prodotto=' . $row["ID"] . '"><button class="pulsante">-</button></a></td>';
					echo '<td class="contorno"><a href="deletecarrello.php?prodotto=' . $row["ID"] . '"><button class="pulsante">X</button></a></td>';
					$totale += $row["prezzo"] * $row["quantita"];
				}
				echo '</table>';
				echo "<h2 class='totale'>Totale: " . $totale . " Euro</h2>";
				echo "<form action='creaordine.php' method='POST'>";
				echo "<input type='hidden' name='totale' value='" . $totale . "'>";
				echo '<h2>Modalità spedizione</h2> <select name="spedizione" class="spedizione-select">';
				echo '<option value="Corriere Espresso_9.99">Corriere Espresso (9,99 Euro)</option>';
				echo '<option value="Ritiro a mano_0">Ritiro a mano (Gratis)</option>';
				echo '</select>';

				echo "<br><br><button type='submit' class='pulsante'>Completa l'ordine</input>";
				echo "</form>";
			} else {
				echo "<h1>Il tuo carrello è vuoto!</h1>";
			}
		}
		?>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>