<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 3-3</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <div class="resultat">
            <h1>Talserier</h1><br>
            <?php
/* Ta emot data */
$tal = $_REQUEST["tal"];


/* Skriv ut resultat */
for ($i = $tal; $i <= 50; $i++) { 
    echo "$i: ". $i * $i . " <br>";
}

?>
    </form>
    </div>
</body>
</html>