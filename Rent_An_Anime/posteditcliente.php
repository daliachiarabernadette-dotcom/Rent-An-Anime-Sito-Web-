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
        include "connessione.php"; // Assicurati di includere il file di connessione per $mysqli
        if (!isset($_SESSION["email"])) {
            echo "Errore! Accedi per modificare i tuoi dati! Sarai reindirizzato sulla pagina d'accesso.";
            header('Refresh: 3; URL=login.php');
        } else {
            $sql = "SELECT password FROM Cliente WHERE email='" . $_SESSION["email"] . "'";
            $result = $mysqli->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (password_verify($_POST["pass"], $row["password"])) {
                        if (!empty($_POST["newpass"])) {
                            $newpass = password_hash($_POST["newpass"], PASSWORD_DEFAULT);
                            $sql = "UPDATE Cliente SET password='" . $newpass . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["nome"])) {
                            $sql = "UPDATE Cliente SET nome='" . $_POST["nome"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["cognome"])) {
                            $sql = "UPDATE Cliente SET cognome='" . $_POST["cognome"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["localita"])) {
                            $sql = "UPDATE Cliente SET comune='" . $_POST["localita"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["provincia"])) {
                            $sql = "UPDATE Cliente SET provincia='" . $_POST["provincia"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["indirizzo"])) {
                            $sql = "UPDATE Cliente SET indirizzo='" . $_POST["indirizzo"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["cap"])) {
                            $sql = "UPDATE Cliente SET cap='" . $_POST["cap"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["telefono"])) {
                            $sql = "UPDATE Cliente SET telefono='" . $_POST["telefono"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        if (!empty($_POST["codfiscale"])) {
                            $sql = "UPDATE Cliente SET codfiscale='" . $_POST["codfiscale"] . "' WHERE email='" . $_SESSION["email"] . "'";
                            $mysqli->query($sql);
                        }
                        echo "Modifica effettuata con successo! Sarai reindirizzato sulla pagina dati.";
                        header('Refresh: 3; URL=cliente.php');
                    } else {
                        echo "Password errata! Sarai reindirizzato sulla pagina dati.";
                        header('Refresh: 3; URL=cliente.php');
                    }
                }
            }
        }
        ?>
    </div>
    <?php
    include "footer.php";
    ?>
</body>

</html>