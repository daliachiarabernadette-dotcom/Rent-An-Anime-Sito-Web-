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
		if (empty($_POST["email"]) || empty($_POST["userpassword"])) {
			echo "Errore! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=index.php');
			include "footer.php";
			exit();
		}



		$sql = "SELECT password FROM Cliente WHERE email='" . $_POST["email"] . "'";
		$result = $mysqli->query($sql);

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				if (password_verify($_POST["userpassword"], $row["password"])) {
					$_SESSION["email"] = $_POST["email"];
					header('Refresh: 0; URL=index.php');
				} else {
					echo "Password errata! Sarai reindirizzato sulla pagina d'accesso.";
					include "footer.php";
					header('Refresh: 3; URL=login.php');
				}
			}
		} else {
			echo "Email non esistente! Sarai reindirizzato sulla pagina d'accesso.";
			include "footer.php";
			header('Refresh: 3; URL=login.php');
		}
		?>
	</div>
</body>

</html>