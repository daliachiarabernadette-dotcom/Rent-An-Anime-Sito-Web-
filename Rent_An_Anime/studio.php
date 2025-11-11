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

	$sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione FROM Anime WHERE studio='" . $_GET["studio"] . "' AND quantita>0";
	$result = $mysqli->query($sql);
	if ($result->num_rows > 0) {
		echo "<br>";
		while ($row = $result->fetch_assoc()) {
			echo '<div class="row product">';
			echo '<div class="col-3 center">';
			echo '<img src="' . $row["smallimg"] . '" style="width: 80%">';
			echo '</div>';
			echo '<div class="col-9 center">';
			echo '<div class="riquadro-genere center ">';
			if ($row["prezzo"] != NULL)
				echo '<h2><strong>' . $row["nome"] . '</strong> </div>
			<div class="riquadro center">
				<div class="riquadro-lista"> 
					<p><strong>Audio</strong><br> ' . $row["audio"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Sottotitoli</strong><br> ' . $row["sottotitoli"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Data di Uscita</strong><br> ' . $row["data_uscita"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Stagione</strong><br> ' . $row["stagione"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Studio</strong><br> ' . $row["studio"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Genere</strong><br> ' . $row["genere"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Episodi</strong><br> ' . $row["episodi"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Durata</strong><br> ' . $row["durata"] . '</p></div>
					</h2></div>';
			else
				echo '<strong>' . $row["nome"] . '</strong> </div>
			<div class="riquadro center">
				<div class="riquadro-lista"> 
					<p><strong>Audio</strong><br> ' . $row["audio"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Sottotitoli</strong><br> ' . $row["sottotitoli"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Data di Uscita</strong><br> ' . $row["data_uscita"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Stagione</strong><br> ' . $row["stagione"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Studio</strong><br> ' . $row["studio"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Genere</strong><br> ' . $row["genere"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Episodi</strong><br> ' . $row["episodi"] . '</p></div>
				<div class="riquadro-lista"> 
					<p><strong>Durata</strong><br> ' . $row["durata"] . '</p></div>
				</div>';
			echo '<p class="justify">';
			echo '<div class="riquadro center">';
			echo '<div class="riquadro-lista">';
			echo '<strong>Descrizione</strong><br> ';
			echo $row["descrizione"];
			echo '</p></div></div>';
			echo '<h1>' . $row["prezzo"] . ' Euro</h1>';
			echo '<a href="prodotto_con_video.php?id=' . $row["ID"] . '"><button class="pulsante">Trailer</button></a>';
			echo '<a href="prodotto.php?id=' . $row["ID"] . '"><button class="pulsante">Scheda</button></a><a href="addcarrello.php?prodotto=' . $row["ID"] . '"><button class="pulsante">Compra</button></a>';

			echo '</div>';
			echo '</div><br><hr>';
		}
	} else {
		echo "<h1 class='center'>Genere vuoto o inesistente!</h1>";

	}
	?>
	<?php require ("footer.php"); ?>
</body>

</html>