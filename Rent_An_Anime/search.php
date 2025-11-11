<html>

<head>
	<title>Noleggio Anime Online</title>
	<link rel="stylesheet" href="css/styles">
	<?php
	session_start();
	require ("connessione.php");
	?>


</head>

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


	<center>
		<div class="title">
			<h1><a href="index.php" class="title"><img src="logo.png" style="width: 30%; height: 17%;"></a></h1>
		</div>
	</center>
	</div>

	<center>
		<?php
		include "giorno_mese_anno.php";
		include "orologio_digitale.php";
		?>
	</center>

	<div class="riquadro-ricerca">
		<div class="top-bar left">
			<?php
			if (!isset($_SESSION["email"])) {
				echo '<a href="signup.php"><button class="pulsante-ricerca">REGISTRATI</button></a>';
				echo '<a href="login.php"><button class="pulsante-ricerca">ACCEDI</button></a>';
			} else {
				echo '<a href="index.php" ><button class="pulsante-ricerca">INDIETRO</button></a>';
				echo '<a href="account.php"><button class="pulsante-ricerca">ACCOUNT</button></a>';
				echo '<a href="logout.php"><button class="pulsante-ricerca">ESCI</button></a>';
			}
			?>

			<?php
			echo ' | ';
			echo '<a href="categoria.php" class="scelta"><button class="pulsante-ricerca">GENERI</button></a>';
			echo '<a href="sceltaaudio.php" class="scelta"><button class="pulsante-ricerca">AUDIO</button></a>';
			echo '<a href="sceltasottotitoli.php" class="scelta"><button class="pulsante-ricerca">SOTTOTITOLI</button></a>';
			echo '<a href="sceltastudio.php" class="scelta"><button class="pulsante-ricerca">STUDIO</button></a>';
			?>
			<a href="carrello.php" class="carrello-link"><button class="pulsante-ricerca">🛒</button></a>
			<a href="carrello.php" class="carrello-link"><button class="pulsante-ricerca">📧</button></a>
			<a href="carrello.php" class="carrello-link"><button class="pulsante-ricerca">📞</button></a>
		</div>
	</div>

	<div class="row center">
		<form action="search.php" method="post" class="search-form">
			<input type="text" placeholder="Cerca l'anime..." name="search" class="search-input">
			<button type="submit" class="search-button">🔍</button>
		</form>
	</div>


	<hr>

	<div class="row center">
		<?php
		$errorprice = 0;
		$campipost = array("search", "nome", "audio", "sottotitoli", "data_uscita", "stagione", "studio", "genere", "episodi", "durata", "prezzomin", "prezzomax");
		foreach ($campipost as $campo) {
			if (!isset($_POST[$campo]))
				$_POST[$campo] = "";
		}
		$sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, prezzo, smallimg, smallimg, descrizione FROM Anime WHERE quantita>0";

		// Aggiungo la ricerca per nome
		if ($_POST["search"] != "") {
			$search_term = $_POST["search"];
			$sql = $sql . " AND nome LIKE '%" . $search_term . "%'";
		}


		$result = $mysqli->query($sql);
		if ($result !== false && $result->num_rows > 0) {
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
		} else
			echo "<br><h1>Errore! Nessun prodotto trovato!</h1><br>";

		?>
	</div>




	<?php require ("footer.php"); ?>
	</div>
</body>

</html>