<?php
/* Tar emot data som skickats */
$förnamn = $_REQUEST["fornamn"];
$efternamn = $_REQUEST["efternamn"];
$mobil = $_REQUEST["mobil"];
$kön = $_REQUEST["kon"];
$hjälte = $_REQUEST["hjalte"];
$kommentar = $_REQUEST["kommentar"];

?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Svar</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="kontainer">
        <?php
        /* Skriv ut en snygg bekräftelse */
        echo "$förnamn<br>";
        echo "$efternamn<br>";
        echo "$mobil<br>";
        echo "$kön<br>";
        echo "$hjälte<br>";
        echo "$kommentar<br>";
        ?>
        <button>Ait</button>
    </form>
</body>
</html>