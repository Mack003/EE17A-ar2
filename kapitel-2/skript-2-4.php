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
$temp = $_REQUEST["temp"];

// F = (9/5)*C + 32
$fahrenheit = (9/5)*$temp + 32;

/* Skriv ut resultat F = (9/5)*C + 32 */
echo "<p>$temp&deg; Celsius är $fahrenheit&deg; Fahrenheit.</p>"

?>
    </div>
</body>
</html>