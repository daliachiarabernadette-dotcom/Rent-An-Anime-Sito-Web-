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

	<div class="row left">
		<?php




		$sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione FROM Anime WHERE ID=" . $_GET["id"];
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			echo '<div class="row"><hr>';
			while ($row = $result->fetch_assoc()) {
				echo '<div class="col-3 left"><img src="' . $row["smallimg"] . '"class="col-12 left"></div>';
				echo '<div class="col-8 center">';

				echo '<h1>Scheda tecnica</h1>';
				echo '<table class="center table-styled" style="width:80%">';
				echo '<tr>
					<td><b><strong>Nome</strong></b></td>
					<td class="contorno">' . $row["nome"] . '</td>
				</tr>';
				echo '<tr>
				<td><b><strong>Audio</strong></b></td>
				<td class="contorno">' . $row["audio"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Sottotitoli</strong></b></td>
				<td class="contorno">' . $row["sottotitoli"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Data Di Uscita</strong></b></td>
				<td class="contorno">' . $row["data_uscita"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Stagione</strong></b></td>
				<td class="contorno">' . $row["stagione"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Studio</strong></b></td>
				<td class="contorno">' . $row["studio"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Genere</strong></b></td>
				<td class="contorno">' . $row["genere"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Episodi</strong></b></td>
				<td class="contorno">' . $row["episodi"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Durata</strong></b></td>
				<td class="contorno">' . $row["durata"] . '</td>
				</tr>';

				echo '<tr>
				<td><b><strong>Descrizione</strong></b></td>
				<td class="contorno">' . $row["descrizione"] . '</td>
				</tr>';

				echo '</table>';

				echo '<h1 class="price center">' . $row["prezzo"] . ' Euro</h1>';
				echo '<a href="prodotto_con_video.php?id=' . $row["ID"] . '"><button class="pulsante">Trailer</button></a>';
				echo '<a href="addcarrello.php?prodotto=' . $_GET["id"] . '"><button class="pulsante">Aggiungi al Carrello</button></a>';

				echo '</div>';
				echo '</div>';

			}
		} else {
			echo '<p class="center">Errore! Prodotto non trovato! Sarai reindirizzato sulla homepage.</p>';
			header('Refresh: 3; URL=index.php');
		}

		?>
		<?php
		include "footer.php";
		?>
</body>

</html>