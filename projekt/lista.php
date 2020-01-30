<?php
session_start();
include_once "./konfig-db.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Virtuell Checklista</h1>
        <div class="alert alert-info" role="alert">
    <?php
        echo "<p>Inloggad som {$_SESSION["namn"]}</p>";
    ?>
        </div>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
            <?php
        $conn = new mysqli($host, $användare, $lösenord, $databas);

        /* Gick det att ansluta? */
        if ($conn->connect_error) {
            die("Kunde inte ansluta till databasen: " . $conn->connect_error);
        } else {
            // echo "<p>Gick bra att ansluta</p>";
        }

        /* 2. Kolla upp att kontouppgifter stämmer */
        $sql = "SELECT * FROM `todo` WHERE `användare` = '{$_SESSION["namn"]}'";
        $id = ($conn->query($sql))->fetch_assoc()['id'];

        $sql = "SELECT * FROM `listor` WHERE `aid` = $id";
        $result = $conn->query($sql);

        /* Gick det bra? */
        if (!$result) {
            die("Något blev fel");
        } else {
            while ($rad = $result->fetch_assoc()) {
                if ($rad['klar'] == 1) {
                    echo "<li class=\"list-group-item\"><a href=\"./checkmark.php?id={$rad["id"]}&klar=0\">{$rad["text"]} &#10004;</a></li>";
                } else {
                    echo "<li class=\"list-group-item\"><a href=\"./checkmark.php?id={$rad["id"]}&klar=1\">{$rad["text"]}</a></li>";
                }
            }
        }
        ?>
            </ul>
        </div>
        <a href="./checkmark.php?id={$rad[" id"]}&klar=1"></a>
        <br>
        <a class="btn btn-primary" href="./laggtill.php">Lägg till</a>
        <a class="btn btn-danger" href="./loggain.php">Logga ut</a>
        <a class="btn btn-danger" href="./rensa.php">Rensa</a>
    </div>
</body>
</html>