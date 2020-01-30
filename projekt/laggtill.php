<?php
error_reporting(E_ALL);
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
        <div class="formular">
            <form action="#" method="post">
                <label><b>Lägg till i listan</b></label>
                <input name="inlagg" type="text"><br>
                <button>Lägg till</button>
            </form>
            <a class="btn btn-danger" href="./lista.php">Tillbaka</a>
        </div>

    <?php
    $inlagg = filter_input(INPUT_POST, 'inlagg', FILTER_SANITIZE_STRING);
    if ($inlagg) {
        /* 1. Logga in */
        $conn = new mysqli($host, $användare, $lösenord, $databas);

        /* Gick det att ansluta? */
        if ($conn->connect_error) {
            die("Kunde inte ansluta till databasen: " . $conn->connect_error);
        } else {
            //echo "<p>Gick bra att ansluta</p>";
        }

        /* 2. Kolla upp att kontouppgifter stämmer */
        $sql = "INSERT INTO `listor` ( `aid`, `text`, `klar`) VALUES ('{$_SESSION["aid"]}', '$inlagg', '0')";
        //var_dump($sql);
        $result = $conn->query($sql);

        /* Gick det bra? */
        if (!$result) {
            die("Något blev fel" . $conn->error);
        } else {
            echo "<div class=\"alert alert-success\" role=\"alert\">
                    Tillagt!
                </div>";
        }
    } else {
        //echo "<p>text saknas</p>";
    }
    ?>
    </div>
</body>
</html>