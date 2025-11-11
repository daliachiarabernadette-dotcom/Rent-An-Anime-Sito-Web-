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

		if ((($_POST["email"]) == "") || (($_POST["password"]) == "") || (($_POST["ripetipassword"]) == "") || (($_POST["nome"]) == "") || (($_POST["cognome"]) == "") || (($_POST["localita"]) == "") || (($_POST["provincia"]) == "") || (($_POST["indirizzo"]) == "") || (($_POST["cap"]) == "")) {
			echo "Errore. Campi richiesti mancanti! Sarai reindirizzato sulla pagina di registrazione.";
			header('Refresh: 3; URL=signup.php');
			exit();
		}


		if ($_POST["password"] == $_POST["ripetipassword"]) {
			$pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
			if ($_POST["telefono"] != "")
				$telefono = "'" . $_POST["telefono"] . "'";
			else
				$telefono = "NULL";
			if ($_POST["codfiscale"] != "")
				$codfiscale = "'" . $_POST["codfiscale"] . "'";
			else
				$codfiscale = "NULL";
			$sql = "INSERT INTO Cliente VALUES ('" . $_POST["email"] . "', '" . $pass . "', '" . $_POST["nome"] . "', '" . $_POST["cognome"] . "', '" . $_POST["localita"] . "', '" . $_POST["provincia"] . "', '" . $_POST["indirizzo"] . "', '" . $_POST["cap"] . "', " . $telefono . ", " . $codfiscale . ")";
			if ($mysqli->query($sql) === TRUE) {
				echo "La registrazione e' andata a buon fine! Sarai reindirizzato sulla pagina d'accesso.";
				header('Refresh: 3; URL=login.php');
			} else {
				echo "Registrazione fallita! Sarai reindirizzato sulla pagina di registrazione.";
				header('Refresh: 3; URL=signup.php');
			}
		} else {
			echo "Registrazione fallita! Le password non combaciano. Sarai reindirizzato sulla pagina di registrazione.";
			header('Refresh: 3; URL=signup.php');
		}
		?>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>