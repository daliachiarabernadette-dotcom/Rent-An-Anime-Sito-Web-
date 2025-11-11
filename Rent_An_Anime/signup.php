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

	<center>
		<div class="login">
			<div class="row center">
				<?php
				if (!isset($_SESSION["email"])) {
					echo
						'
			<form action="postsignup.php" method="POST">
			<h3>Effettua la registrazione compilando i seguenti campi (* obbligatorio)</h3>
			<label class="right">Email*:</label><input type="email" maxlength="64" name="email" class="custom-input"><br>
			<label class="right">Password*:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="password" class="custom-input"><br>
			<label class="right">Ripeti password*:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="ripetipassword" class="custom-input"><br>
			<label class="right">Nome*:</label><input type="text" maxlength="32" name="nome" class="custom-input"><br>
			<label class="right">Cognome*:</label><input type="text" maxlength="32" name="cognome" class="custom-input"><br>
			<label class="right">Comune*:</label><input type="text" maxlength="32" name="localita" class="custom-input"><br>
			<label class="right">Provincia*:</label><input type="text" pattern="[A-Za-z]{2}" title="La provincia è formata da 2 caratteri" maxlength="2" name="provincia" class="custom-input"><br>
			<label class="right">Indirizzo*:</label><input type="text" maxlength="64" name="indirizzo" class="custom-input"><br>
			<label class="right">CAP*:</label><input type="text" pattern="[0-9]{5}" title="Il CAP è formato da 5 numeri" name="cap" class="custom-input"><br>
			<label class="right">Telefono:</label><input type="text" maxlength="10" name="telefono" class="custom-input"><br>
			<label class="right">Codice Fiscale:</label><input type="text" pattern=".{16}" title="Il codice fiscale è formato da 16 caratteri" maxlength="16" name="codfiscale" class="custom-input"><br><br>
			<button type="reset" class="pulsante">Cancella</button><button type="submit" class="pulsante">Registrati</button>
			</form>';
				} else {
					echo "Hai già effettuato il login! Sarai reindirizzato sulla homepage.";
					header('Refresh: 3; URL=index.php');
				}
				?>
			</div>
		</div>
	</center>
	<?php
	include "footer.php";
	?>
</body>

</html>