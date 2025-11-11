<html>

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
        ミミ◦❧◦°˚°◦.¸¸◦°´❤*•.¸♥⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀SCEGLI IL GENERE CHE PREFERISCI⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀♥¸.•*❤´°◦¸¸.◦°˚°◦☙◦彡彡
    </div>

    <BR>

    <div class="row">
        <div class="paragrafo">
            <?php
            $sql = "SELECT nome FROM Generi";

            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc())
                    echo '<a href="genere.php?genere=' . $row["nome"] . '"><button class="pulsante">' . $row["nome"] . '</button></a>';
            }
            ?>
        </div>
    </div>

    <hr>

    <div class="annunci">
        ミミ◦❧◦°˚°◦.¸¸◦°´❤*•.¸♥⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀SPIEGAZIONE GENERI⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀♥¸.•*❤´°◦¸¸.◦°˚°◦☙◦彡彡
    </div>

    <div class="contenitore">
        <div class="riquadro-genere">
            <p><strong>Azione:</strong> Gli anime di azione sono caratterizzati da combattimenti, avventure e sequenze
                adrenaliniche. Solitamente, seguono protagonisti che affrontano sfide fisiche e cercano di superare
                avversità usando le proprie abilità e determinazione.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Avventura:</strong> Gli anime di avventura sono incentrati sull'esplorazione di mondi fantastici,
                la scoperta di luoghi misteriosi e la ricerca di tesori. Spesso seguono viaggi epici compiuti da eroi
                che devono superare ostacoli per raggiungere i loro obiettivi.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Combattimento:</strong> Questi anime si concentrano sulle lotte e sulle battaglie, dove i
                personaggi combattono utilizzando varie tecniche di combattimento. Possono essere ambientati in contesti
                storici, fantastici o futuristici.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Commedia:</strong> Gli anime comici sono caratterizzati da situazioni divertenti, battute e gag
                che fanno ridere il pubblico. Possono coprire una vasta gamma di argomenti, dalle situazioni quotidiane
                alle parodie dei generi più popolari.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Cyberpunk:</strong> Gli anime cyberpunk sono ambientati in un futuro distopico dominato dalla
                tecnologia avanzata e da una società corrotta. Esplorano spesso temi come l'alienazione, la ribellione
                contro l'autorità e le conseguenze dell'avanzamento tecnologico.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Drammatico:</strong> Gli anime drammatici si concentrano sulle emozioni intense, i conflitti
                personali e le relazioni complesse tra i personaggi. Affrontano spesso temi seri e toccanti, come la
                perdita, l'amore non corrisposto e la lotta per il successo.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Fantasy:</strong> Gli anime fantasy sono ambientati in mondi immaginari popolati da creature
                magiche, eroi leggendari e avventure epiche. Esplorano spesso temi di magia, mitologia e destino.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Gioco:</strong> Questi anime ruotano attorno ai videogiochi e ai giocatori che competono in
                tornei, sfide o avventure virtuali. Possono esplorare la dinamica del gioco online, i mondi virtuali o
                le conseguenze della vita reale dei giocatori.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Horror:</strong> Gli anime horror sono incentrati sull'orrore, il terrore e l'ansia. Esplorano
                spesso temi come il soprannaturale, i mostri e i misteri oscuri. Possono essere sia psicologici che
                splatter, a seconda della natura delle paure che cercano di suscitare.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Josei:</strong> Gli anime josei sono rivolti a un pubblico femminile adulto e affrontano temi più
                maturi e realistici, come le relazioni interpersonali, la carriera e l'autorealizzazione.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Magia:</strong> Questi anime ruotano attorno alla magia e ai poteri sovrannaturali. Esplorano
                spesso le avventure di maghi, streghe e creature magiche che usano la magia per affrontare sfide e
                risolvere problemi.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Mecha:</strong> Gli anime mecha sono caratterizzati dalla presenza di robot giganti pilotati da
                umani. Spesso coinvolgono battaglie epiche tra mech e affrontano temi come la guerra, la tecnologia e
                l'umanità.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Mistero:</strong> Gli anime misteriosi si concentrano su enigmi, indagini e colpi di scena.
                Possono coinvolgere detective, investigatori o personaggi che cercano di risolvere crimini o svelare
                segreti nascosti.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Musicale:</strong> Gli anime musicali si concentrano sulla musica e sulle performance artistiche.
                Possono seguire le storie di band, idol o musicisti che cercano il successo nel mondo della musica.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Psicologico:</strong> Gli anime psicologici esplorano le complesse sfaccettature della mente
                umana, affrontando temi come la percezione, l'identità e la follia. Possono coinvolgere trame
                psicologiche complesse e personaggi che affrontano lotte interiori.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Romantico:</strong> Gli anime romantici si concentrano sulle relazioni amorose, l'amore non
                corrisposto e le emozioni romantiche. Possono esplorare varie forme di amore, dalle storie d'amore dolci
                e romantiche alle relazioni complesse e struggenti.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Sci-Fi:</strong> Gli anime di fantascienza sono ambientati in un futuro distante o in mondi
                alternativi e affrontano temi legati alla tecnologia avanzata, all'esplorazione spaziale e alla vita
                aliena.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Seinen:</strong> Gli anime seinen sono rivolti a un pubblico maschile adulto e affrontano temi
                più maturi e realistici, come la violenza, la sessualità e il dramma.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Shoujo:</strong> Gli anime shoujo sono rivolti a un pubblico femminile giovane e affrontano temi
                romantici, relazioni interpersonali e autorealizzazione.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Shounen:</strong> Gli anime shounen sono rivolti a un pubblico maschile giovane e sono
                caratterizzati da azione, avventura e combattimenti. Spesso seguono protagonisti giovani che cercano di
                diventare più forti e superare ostacoli.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Slice of Life:</strong> Gli anime Slice of Life mostrano la vita quotidiana e le interazioni
                umane senza una trama elaborata. Si concentrano sulle relazioni interpersonali, le esperienze di vita e
                i momenti significativi nella vita dei personaggi.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Sovrannaturale:</strong> Gli anime sovrannaturali coinvolgono elementi o fenomeni al di là della
                spiegazione scientifica, come fantasmi, demoni o poteri paranormali. Possono esplorare l'occulto, il
                soprannaturale e l'insolito.</p>
        </div>

        <div class="riquadro-genere">
            <p><strong>Storico:</strong> Gli anime storici sono ambientati in epoche passate e si basano su eventi
                storici, culture e costumi del tempo. Possono essere accurati dal punto di vista storico o includere
                elementi fantastici.</p>
        </div>



    </div>

    <?php require ("footer.php"); ?>
</body>

</html>