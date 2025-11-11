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
				// Mostra il messaggio di errore se esiste
				if (isset($_SESSION['error_message'])) {
					echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';
					unset($_SESSION['error_message']); // Cancella il messaggio di errore dopo averlo mostrato
				}

				if (!isset($_SESSION["email"])) {
					echo '
			<form action="postlogin.php" method="POST">
			<h3>Modulo di accesso</h3>
			<label class="right">Email:</label><input type="email" maxlength="64" name="email" class="custom-input"><br>
			<label class="right">Password:</label><input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="userpassword" class="custom-input"><br>
			<br><button type="reset" class="pulsante">Cancella</button><button type="submit" class="pulsante">Accedi</button>
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