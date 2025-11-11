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

    <hr>
    <div class="annunci">
        ミミ◦❧◦°˚°◦.¸¸◦°´❤*•.¸♥⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀TUTTI I NOSTRI ANIME⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀♥¸.•*❤´°◦¸¸.◦°˚°◦☙◦彡彡
    </div>
    <br>

    <div class="row center">

        <?php
        $sql = "SELECT ID, nome, audio, sottotitoli, data_uscita, stagione, studio, genere, episodi, durata, quantita, prezzo, smallimg FROM Anime WHERE quantita>0 ORDER BY nome";
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
        ?>
    </div>



    <?php
    require ("footer.php");
    ?>

</body>

</html>