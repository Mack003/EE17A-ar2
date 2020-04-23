<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Inlägg</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
    <div class="kontainer">
        <?php

/* Läs filen */
$filename = './inlagg.csv';
if (is_readable($filename)) {

    $rader = file($filename);
    echo "<table>";
    echo "<tr><th>Namn</th><th>Inlägg</th></tr>";
    /* dela upp texten */
    foreach ($rader as $rad) {

        $delar = explode('¨ ', $rad);

        /* Skriv ut tabellrad */
        echo "<tr><td>$delar[0]</td><td>$delar[1]</td></tr>";
    }
    echo "</table>";

    //echo 'The file is readable';
} else {
    echo 'The file is not readable';
}

?>
    </div>
</body>
</html>