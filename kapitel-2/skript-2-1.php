<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produkt</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <div class="resultat">
            <h1>Multiplicera</h1><br>
            <?php
/* Ta emot data */
$tal1 = $_REQUEST["tal1"];
$tal2 = $_REQUEST["tal2"];

/* Skriv ut resultat */
$resultat = $tal1 * $tal2;
echo "<p>Produkten av $tal1 och $tal2 är $resultat</p>"
?>
    </form>
    </div>
</body>
</html>