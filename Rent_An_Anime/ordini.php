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
			echo "Errore! Accedi per visualizzare gli ordini! Sarai reindirizzato sulla pagina d'accesso.";
			header('Refresh: 3; URL=login.php');
		} else {
			$sql = "SELECT ID, totale, data, stato FROM Ordine WHERE cliente='" . $_SESSION["email"] . "'";
			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {

				echo "<h1>Lista ordini effettuati</h1>";
				echo '<table class="center table-styled" style="width:100%">';
				echo
					'<tr>
						<th>Numero ordine</th>
						<th>Data</th>
						<th>Stato</th>
						<th>Totale</th>
						<th>Visualizza</th>
					</tr>';
				while ($row = $result->fetch_assoc()) {
					echo
						'<tr>
							<td>' . $row["ID"] . '</td>
							<td>' . $row["data"] . '</td>
							<td>' . $row["stato"] . '</td>
							<td>' . $row["totale"] . ' Euro</td>
							<td><a href="ordine.php?id=' . $row["ID"] . '"><button class="pulsante">Visualizza</button></a></td>
						</tr>';
				}
				echo '</table>';
			} else {
				echo "<h1>Non hai effettuato ordini!</h1>";
			}
		}
		?>
	</div>
	<pre>






</pre>
	<?php
	include "footer.php";
	?>
</body>

</html>