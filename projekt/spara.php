<?php
session_start();
include_once "./konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
        <h2>Registrera användare</h2>
        <label>Användarnamn</label>
        <input type="text" name="anamn" placeholder="Tex erik12" required>
        <label>Lösenord</label>
        <input type="password" name="lösen" required>
        <button>Skicka</button>
    </form>
    <?php
    $namn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
    $lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);
var_dump($namn, $lösen);
    if ($namn && $lösen) {
        /* 1. Logga in */
        $conn = new mysqli($host, $användare, $lösenord, $databas);

        /* Gick det att ansluta? */
        if ($conn->connect_error) {
            die("Kunde inte ansluta till databasen: " . $conn->connect_error);
        } else {
              echo "<p>Gick bra att ansluta</p>";  
        }

        $hash = password_hash($lösen, PASSWORD_DEFAULT);

        /* 2. Kolla upp att kontouppgifter stämmer */
        $sql = "INSERT INTO `todo` (`användare`, `hash`) VALUES ('$namn', '$hash');";
        var_dump($sql);
        $result = $conn->query($sql);

        /* Gick det bra? */
        if (!$result) {
            die("Något blev fel");
        } else {
            echo "<p>Användare registrerad</p>";
        }
    }
    ?>
</body>
</html>