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

	<div class="row">
		<div class="paragrafo">
			<?php
			$sql = "SELECT DISTINCT audio FROM Anime";

			$result = $mysqli->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc())
					echo '<a href="audio.php?audio=' . $row["audio"] . '"><button class="pulsante">' . $row["audio"] . '</button></a>';
			}
			?>
		</div>
	</div>
	<?php require ("footer.php"); ?>
</body>

</html>