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
			echo "Errore! Accedi per visualizzare questa pagina. Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		} else {
			echo '<h1>Pagina account - ' . $_SESSION["email"] . '</h1>';
			echo '<a href="carrello.php"><button class="pulsante">Visualizza carrello</button></a> ';
			echo '<a href="ordini.php"><button class="pulsante">Visualizza ordini</button></a> ';
			echo '<a href="cliente.php"><button class="pulsante">Visualizza dati</button></a> ';
			echo '<a href="editcliente.php"><button class="pulsante">Modifica dati</button></a> ';
			echo '<a href="logout.php"><button class="pulsante">Effettua il logout</button></a>';
		}
		?>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>