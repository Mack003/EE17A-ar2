<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 2-2</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="resultat">
            <h1>Bekräftelse</h1><br>
            <?php
/* Ta emot data */
$storlek = $_REQUEST["storlek"];
$kommentar = $_REQUEST["kommentar"];


/* Skriv ut resultat*/
if ($storlek == "V") {
    $versaler = mb_strtoupper($kommentar);
    echo "<p>$versaler</p>";
}
else {
    $gemener = mb_strtolower($kommentar);
    echo "<p>$gemener</p>";
}

?>
    </div>
</body>
</html>