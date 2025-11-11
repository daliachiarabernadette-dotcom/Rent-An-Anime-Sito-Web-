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
			echo "Errore! Accedi per visualizzare i tuoi dati! Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		} else {
			$sql = "SELECT email, nome, cognome, comune, provincia, indirizzo, cap, telefono, codfiscale FROM Cliente WHERE email='" . $_SESSION["email"] . "'";
			$result = $mysqli->query($sql);
			echo "<h1>Visualizzazione dati cliente - " . $_SESSION["email"] . "</h1>";
			echo '<div class="contorno">';
			echo '<table class="center table-styled" style="width:50%">';
			while ($row = $result->fetch_assoc()) {
				echo
					'<tr>
					<td>Email</td>
					<td>' . $row["email"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>Nome</td>
					<td>' . $row["nome"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>Cognome</td>
					<td>' . $row["cognome"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>Indirizzo</td>
					<td>' . $row["indirizzo"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>Comune</td>
					<td>' . $row["comune"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>Provincia</td>
					<td>' . $row["provincia"] . '</td>
				</tr>';
				echo
					'<tr>
					<td>CAP</td>
					<td>' . $row["cap"] . '</td>
				</tr>';
				if (isset($row["telefono"])) {
					echo
						'<tr>
						<td>Telefono</td>
						<td>' . $row["telefono"] . '</td>
					</tr>';
				}
				if (isset($row["codfiscale"])) {
					echo
						'<tr>
						<td>Codice fiscale</td>
						<td>' . $row["codfiscale"] . '</td>
					</tr>';
				}
			}
			echo '</table></div>';
			echo '<br><a href="editcliente.php"><button class="pulsante">Modifica dati</button></a><br><br>';
		}
		?>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>