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

    <div class="row left">
        <?php
        $sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg, descrizione FROM Anime WHERE ID=" . $_GET["id"];
        $result = $mysqli->query($sql);
        if ($result->num_rows > 0) {
            echo '<div class="row"><hr>';
            while ($row = $result->fetch_assoc()) {
                // Mappa degli ID dei video ai relativi percorsi dei file video
                $video_paths = array(
                    1 => "video/oshinoko.mp4",
                    2 => "video/jujutsukaisen.mp4",
                    3 => "video/spyxfamily.mp4",
                    4 => "video/sailormoon.mp4",
                    5 => "video/given.mp4",
                    6 => "video/attackontitan.mp4"
                );

                echo '<div class="col-3 left"><img src="' . $row["smallimg"] . '" class="col-12 left"></div>';
                echo '<div class="col-8 center">';
                echo '<h1>TRAILER</h1>';

                // Verifica se l'ID è presente nella mappa e mostra il video associato
                if (array_key_exists($row["ID"], $video_paths)) {
                    echo '
                <div class="video-wrapper">
                    <div class="video-container">
                        <video controls autoplay>
                            <source src="' . $video_paths[$row["ID"]] . '" type="video/mp4">
                            <source src="video/movie.ogg" type="video/ogg">
                            Il tuo browser non supporta il video.
                        </video>
                    </div>
                </div>';
                } else {
                    echo '<p>Video non disponibile per questo ID.</p>';
                }

                echo '<h1>' . $row["prezzo"] . ' Euro</h1>';
                echo '<a href="prodotto.php?id=' . $row["ID"] . '"><button class="pulsante">Scheda</button></a>';
                echo '<a href="addcarrello.php?prodotto=' . $_GET["id"] . '"><button class="pulsante">Aggiungi al Carrello</button></a>';
                echo '</div>'; // Chiusura col-8 center
                echo '</div>'; // Chiusura row
            }
        } else {
            echo '<p class="center">Errore! Prodotto non trovato! Sarai reindirizzato sulla homepage.</p>';
            header('Refresh: 3; URL=index.php');
        }
        ?>
        <?php
        include "footer.php";
        ?>
</body>

</html>