<html>

<head>
    <style>
        body {
            background-image: url("sfondo2.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <?php include "header.php"; ?>

    <center>
        <div class="login">
            <div class="row center">

                <?php
                if (!isset($_SESSION["email"])) {
                    echo "Errore! Accedi per modificare i tuoi dati! Sarai reindirizzato sulla pagina d'accesso.";
                    header('Refresh: 3; URL=login.php');
                } else {
                    echo "<h3>Modifica dati cliente - " . $_SESSION["email"] . "</h3>";
                    echo '<form action="posteditcliente.php" method="POST">';
                    echo '<h3>Modifica i campi che desideri (L\'inserimento della password attualmente in utilizzo (*) è obbligatoria)</h3>';
                    echo '<label class="right">Password*:</label>
        <input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="pass" class="custom-input"><br>';
                    echo '<label class="right">Nuova Password:</label>
        <input type="password" pattern=".{8,}" title="La password deve contenere almeno 8 caratteri" name="newpass" class="custom-input"><br>';
                    echo '<label class="right">Nome:</label>
        <input type="text" maxlength="32" name="nome" class="custom-input"><br>';
                    echo '<label class="right">Cognome:</label>
        <input type="text" maxlength="32" name="cognome" class="custom-input"><br>';
                    echo '<label class="right">Comune:</label>
        <input type="text" maxlength="32" name="localita" class="custom-input"><br>';
                    echo '<label class="right">Provincia:</label>
        <input type="text" pattern="[A-Za-z]{2}" title="La provincia è formata da 2 caratteri" maxlength="2" name="provincia" class="custom-input"><br>';
                    echo '<label class="right">Indirizzo:</label>
        <input type="text" maxlength="64" name="indirizzo" class="custom-input"><br>';
                    echo '<label class="right">CAP:</label>
        <input type="text" pattern="[0-9]{5}" title="Il CAP è formato da 5 numeri" name="cap" class="custom-input"><br>';
                    echo '<label class="right">Telefono:</label>
        <input type="text" maxlength="10" name="telefono" class="custom-input"><br>';
                    echo '<label class="right">Codice Fiscale:</label>
        <input type="text" pattern=".{16}" title="Il codice fiscale è formato da 16 caratteri" maxlength="16" name="codfiscale" class="custom-input"><br>';
                    echo '<br><button type="reset" class="pulsante">Cancella</button><button type="submit" class="pulsante">Aggiorna</button>';
                    echo '</form>';
                }
                ?>

            </div>
        </div>
    </center>

    <?php include "footer.php"; ?>
</body>

</html>