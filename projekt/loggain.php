<?php
session_start();
include_once "./konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logga in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Virtuell Checklista</h1>
        <form action="#" method="POST">
            <h2>Logga in</h2>
            <label>Användarnamn</label>
            <input type="text" name="anamn" placeholder="Tex erik12" required>
            <label>Lösenord</label>
            <input type="password" name="lösen" placeholder="*****" required>
            <br>
            <button>Logga in</button>
        </form>
        <p>Har du inget konto?</p>
        <a class="btn btn-primary" href="./spara.php">Skapa konto</a>
        <?php
        $namn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
        $lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);
        //var_dump($namn, $lösen);
        if ($namn && $lösen) {
            /* 1. Logga in */
            $conn = new mysqli($host, $användare, $lösenord, $databas);

            /* Gick det att ansluta? */
            if ($conn->connect_error) {
                die("Kunde inte ansluta till databasen: " . $conn->connect_error);
            } else {
                echo "<p>Gick bra att ansluta</p>";
            }

            /* 2. Kolla upp att kontouppgifter stämmer */
            $sql = "SELECT * FROM `todo` WHERE `användare` LIKE '$namn'";
            $result = $conn->query($sql);

            /* Gick det bra? */
            if (!$result) {
                die("Något blev fel");
            } else {
                $rad = $result->fetch_assoc();
                //var_dump($rad);

                if (password_verify($lösen, $rad[hash])) {
                    echo "<p>Lösenord korrekt!</p>";
                    $_SESSION["namn"] = $namn;
                    $_SESSION["aid"] = $rad["id"];
                    header("Location: lista.php");
                } else {
                    echo "<p>Fel lösenord.</p>";
                }
            }

        }
        ?>
    </div>
</body>
</html>