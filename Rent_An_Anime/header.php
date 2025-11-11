<html>

<head>
	<title>Noleggio Anime</title>
	<link rel="stylesheet" href="css/styles">
</head>
<?php
session_start();
include "connessione.php";
?>

<body>
	<pre>

</pre>

	<pre>
</pre>

	<center>
		<?php
		include "giorno_mese_anno.php";
		include "orologio_digitale.php";
		?>
	</center>

	<center>
		<div class="title">
			<h1><a href="index.php" class="title"><img src="logo.png" style="width: 30%; height: 17%;"></a></h1>
		</div>
	</center>
	</div>

	<div class="riquadro-ricerca">
		<div class="top-bar left">
			<pre></pre>
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
			echo '<a href="lista.php" class="scelta"><button class="pulsante-ricerca">LISTA</button></a>';
			echo '<a href="categoria.php" class="scelta"><button class="pulsante-ricerca">GENERI</button></a>';
			echo '<a href="sceltaaudio.php" class="scelta"><button class="pulsante-ricerca">AUDIO</button></a>';
			echo '<a href="sceltasottotitoli.php" class="scelta"><button class="pulsante-ricerca">SOTTOTITOLI</button></a>';
			echo '<a href="sceltastudio.php" class="scelta"><button class="pulsante-ricerca">STUDIO</button></a>';


			?>
			<a href="carrello.php" class="carrello-link"><button class="pulsante-ricerca">🛒</button></a>
			<a href="contatti.php" class="carrello-link"><button class="pulsante-ricerca">📧</button></a>
			<a href="contatti.php" class="carrello-link"><button class="pulsante-ricerca">📞</button></a>
		</div>
	</div>

	<div class="row center">
		<form action="search.php" method="post" class="search-form">
			<input type="text" placeholder="Cerca l'anime..." name="search" class="search-input">
			<button type="submit" class="search-button">🔍</button>
		</form>
	</div>

	<pre>
</pre>

</body>

</html>