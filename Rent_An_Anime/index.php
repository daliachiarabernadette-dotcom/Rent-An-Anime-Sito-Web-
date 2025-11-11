<html>

<head>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"
		integrity="sha256-FZsW7H2V5X9TGinSjjwYJ419Xka27I8XPDmWryGlWtw=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css"
		integrity="sha256-5uKiXEwbaQh9cgd2/5Vp6WmMnsUr3VZZw0a8rKnOKNU=" crossorigin="anonymous">
</head>

<body>
	<link rel="stylesheet" href="css/styles">
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

	<?php
	include "connessione.php";
	?>

	<hr>
	<div class="annunci">
		ミミ◦❧◦°˚°◦.¸¸◦°´❤*•.¸♥⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ANIME DELLA SETTIMANA⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀♥¸.•*❤´°◦¸¸.◦°˚°◦☙◦彡彡
	</div>
	<br>
	<center>
		<section class="splide" aria-label="Splide Basic HTML Example" style="width: 100%; height: 40%;">
			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide">
						<div class="splide__track"><a href="anime.php?Img=img/oshinoko.jpg" class="title"><img
									src="img/oshinoko.jpg" style="width: 98%; height: 100%;"></a>
					</li>
					<?php
					$immagine_selezionata = 'img/oshinoko.jpg';
					?>
					<li class="splide__slide">
						<a href="anime.php?Img=img/jujutsukaisen.jpg" class="title">
							<img src="img/jujutsukaisen.jpg" style="width: 98%; height: 100%;">
						</a>
					</li>
					<?php
					$immagine_selezionata = 'img/jujustu.jpg';
					?>
					<li class="splide__slide">
						<a href="anime.php?Img=img/spyxfamily.jpg" class="title">
							<img src="img/spyxfamily.jpg" style="width: 98%; height: 100%;">
						</a>
						<?php
						$immagine_selezionata = 'img/spy.jpg';
						?>
					</li>
					<li class="splide__slide">
						<a href="anime.php?Img=img/sailormoon.jpg" class="title">
							<img src="img/sailormoon.jpg" style="width: 98%; height: 100%;">
						</a>
					</li>
					<?php
					$immagine_selezionata = 'img/sailor.jpg';
					?>
				</ul>
			</div>
		</section>
	</center>
	<pre></pre>
	<hr>

	<div class="annunci">
		ミミ◦❧◦°˚°◦.¸¸◦°´❤*•.¸♥⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀NUOVI ARRIVI⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀♥¸.•*❤´°◦¸¸.◦°˚°◦☙◦彡彡
	</div>

	<div class="row center">

		<?php
		$sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg FROM Anime WHERE quantita>0 ORDER BY rand() LIMIT 4";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo '<div class="col-3">';
				echo '<div class="riquadro-1">';
				echo '<img src="' . $row["smallimg"] . '" style="width: 45%; height: 50%;">';
				if ($row["nome"] != NULL)
					echo '<p><h3>' . $row["nome"] . '</h3> 
				<h3> Stagione:' . $row["stagione"] . '</h3></p>';
				else
					echo '<p><h3>' . $row["nome"] . '</h3> 
            Stagione:' . $row["stagione"] . '</p>';

				echo '<h5 style="display:inline">' . $row["prezzo"] . ' Euro</h5><br><br>';
				echo '<a href="prodotto.php?id=' . $row["ID"] . '"><button class="pulsante">Scheda</button></a><a href="addcarrello.php?prodotto=' . $row["ID"] . '"><button class="pulsante">Compra</button></a>';
				echo '<a href="prodotto_con_video.php?id=' . $row["ID"] . '"><button class="pulsante">Trailer</button></a>';

				echo '</div>';
				echo '</div>';
			}
		}
		echo '</div>';
		?>

	</div>
	</div>




	<?php
	include "footer.php";
	?>
</body>

<script>
	var splide = new Splide('.splide', {
		type: 'loop',
		perPage: 3,
		perMove: 1,
	});

	splide.mount();
</script>

</html>