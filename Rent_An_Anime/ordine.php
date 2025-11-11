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
	<?php require ("header.php"); ?>
	<div class="row center">

		<?php
		if (!isset($_SESSION["email"])) {
			echo "Errore! Accedi per visualizzare l'ordine! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=index.php');
		}

		echo '<hr>';
		$sql = "SELECT Ordine.ID, Ordine.cliente, Ordine.nominativo, Ordine.indirizzo, Ordine.tipospedizione, Ordine.costospedizione, Ordine.totale as totaleordine, Ordine.data, Ordine.stato, 
			ProdottoOrdine.ordine, ProdottoOrdine.prodotto, ProdottoOrdine.quantita, ProdottoOrdine.totale as totaleprodotto, Anime.ID as idprodotto, Anime.nome, Anime.audio, Anime.sottotitoli, Anime.data_uscita, Anime.stagione, Anime.studio, Anime.genere, Anime.episodi, Anime.durata, Anime.prezzo
			FROM Ordine, ProdottoOrdine, Anime WHERE Ordine.ID=" . $_GET["id"] . " AND Ordine.cliente='" . $_SESSION["email"] . "' AND Ordine.ID=ProdottoOrdine.ordine AND ProdottoOrdine.prodotto=Anime.ID";

		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			echo '<h1>Ordine #' . $_GET["id"] . '</h1>';
			echo '<table class="center table-styled" style="width:100%">';
			echo
				'<tr>
						<th>Prodotto</th>
						<th>Quantità</th>
						<th>Prezzo</th>
						<th>Totale</th>
					</tr>';
			while ($row = $result->fetch_assoc()) {
				if ($row["nome"] != NULL) {
					echo
						'<tr>
						<td><a href="prodotto.php?id=' . $row["idprodotto"] . '">
						<strong>Nome:</strong> ' . $row["nome"] . '<br>' .
						'<strong>Audio:</strong> ' . $row["audio"] . '<br>' .
						'<strong>Sottotitoli:</strong> ' . $row["sottotitoli"] . '<br>' .
						'<strong>Data di uscita:</strong> ' . $row["data_uscita"] . '<br>' .
						'<strong>Stagione:</strong> ' . $row["stagione"] . '<br>' .
						'<strong>Studio:</strong> ' . $row["studio"] . '<br>' .
						'<strong>Genere:</strong> ' . $row["genere"] . '<br>' .
						'<strong>Episodi:</strong> ' . $row["episodi"] . '<br>' .
						'<strong>Durata:</strong> ' . $row["durata"] . '</a></td>
							<td>' . $row["quantita"] . '</td>
							<td>' . $row["prezzo"] . ' Euro</td>
							<td>' . $row["totaleprodotto"] . ' Euro</td>
						</tr>';
				} else {
					echo
						'<tr>
						<td><a href="prodotto.php?id=' . $row["idprodotto"] . '"><strong>Nome:</strong> ' . $row["nome"] . '<br>' .
						'<strong>Audio:</strong> ' . $row["audio"] . '<br>' .
						'<strong>Sottotitoli:</strong> ' . $row["sottotitoli"] . '<br>' .
						'<strong>Data di uscita:</strong> ' . $row["data_uscita"] . '<br>' .
						'<strong>Stagione:</strong> ' . $row["stagione"] . '<br>' .
						'<strong>Studio:</strong> ' . $row["studio"] . '<br>' .
						'<strong>Genere:</strong> ' . $row["genere"] . '<br>' .
						'<strong>Episodi:</strong> ' . $row["episodi"] . '<br>' .
						'<strong>Durata:</strong> ' . $row["durata"] . '</a></td>							<td>' . $row["quantita"] . '</td>
							<td>' . $row["prezzo"] . ' Euro</td>
							<td>' . $row["totaleprodotto"] . ' Euro</td>
						</tr>';
				}
				$nominativo = $row["nominativo"];
				$indirizzo = $row["indirizzo"];
				$tipospedizione = $row["tipospedizione"];
				$costospedizione = $row["costospedizione"];
				$totale = $row["totaleordine"];
				$data = $row["data"];
				$stato = $row["stato"];
			}
			echo '</table><br>';
			echo
				'<table class="center table-styled" style="width:100%">
					<tr>
						<th>Nominativo</th>
						<th>Indirizzo</th>
						<th>Tipo Spedizione</th>
						<th>Costo Spedizione</th>
						<th>Totale</th>
						<th>Data</th>
						<th>Stato</th>
					</tr>
					<tr>
						<td>' . $nominativo . '</td>
						<td>' . $indirizzo . '</td>
						<td>' . $tipospedizione . '</td>
						<td>' . $costospedizione . '</td>
						<td>' . $totale . ' Euro</td>
						<td>' . $data . '</td>
						<td>' . $stato . '</td>
					</tr>
				</table>';
		} else {
			echo "Errore! Non hai l'accesso a questo ordine! Sarai reindirizzato sulla homepage.";
			header('Refresh: 3; URL=index.php');
		}

		echo "<center>";
		echo "<br><br><h2> Scegli il metodo di pagamento </h2><br>";
		echo '<a href="Contrassegno.php"><button class="pulsante">Contrassegno</button></a>';
		echo '<a href="Bonifico_bancario.php"><button class="pulsante">Bonifico bancario</button></a>';
		echo '<a href="https://www.paypal.com/it/webapps/mpp/personal?gclsrc=aw.ds&gclid=EAIaIQobChMI5KeIgoHa6QIVxbTtCh3s_QgYEAAYASABEgLPvvD_BwE&gclsrc=aw.ds"><button class="pulsante">Paga con Paypal</button></a>';
		echo '<a href="https://postepay.poste.it/prodotti/postepay-evolution.html?STZ=SRC43&gclid=EAIaIQobChMI14O_9Zvv6QIVDYuyCh07gA3NEAAYASAAEgLoyvD_BwE&gclsrc=aw.ds"><button class="pulsante">Paga con Postepay</button></a>';
		echo "</center>";
		?>
	</div>
	<?php require ("footer.php"); ?>
</body>

</html>