<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 3-5</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <div class="resultat">
            <h1>lånekalkylator</h1><br>
            <?php
/* Ta emot data */
$tal = $_REQUEST["tal"];
$tid = $_REQUEST["tid"];
$ranta = $_REQUEST["ranta"];


/* Skriv ut resultat */
$kostnad = $tal;
for ($i = 0; $i < $tid; $i++) { 
    $kostnad =$kostnad * (1 + $ranta / 100);
}
$kostnad = $kostnad - $tal;
echo "<p>totala lånekostnaden är $kostnad.</p>";

?>
    </form>
    </div>
</body>
</html>