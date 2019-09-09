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
    <form>
        <div class="resultat">
            <h1>Bekräftelse</h1><br>
            <?php
/* Ta emot data */
$efternamn = $_REQUEST["efternamn"];
$fornamn = $_REQUEST["fornamn"];
$kontakt = $_REQUEST["kontakt"];
$epost = $_REQUEST["epost"];


/* Skriv ut resultat */
echo "<p>Namn: $fornamn $efternamn</p>";
echo "<p>Epost: $epost</p>";

//var_dump($kontakt);
echo "<p>Vi kommer att kontakta dig inom snarast per $kontakt</p>"
?>
    </form>
    </div>
</body>
</html>