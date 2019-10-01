<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 4-3</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./uppgift-4.4.php" method="POST">
        <h2>Omvandla tal till bokstäver</h2><br>
        <label>Tal</label>
        <input type="number" name="tal" required>


        <button>Skicka</button>
    </form>
    <?php
/* Ta emot data */
$tal = filter_input(INPUT_POST, 'tal', FILTER_SANITIZE_NUMBER_INT);
if ($tal) {
    $tallista = ['Noll', 'Ett', 'Två', 'Tre', 'Fyra', 'Fem', 'Sex', 'Sju', 'Åtta', 'Nio'];

/* dela upp talet i dess siffror */
    $delar = str_split($tal);

/* skriv ut talet i bokstavsform */
    echo "<p>Talet $tal skrivs \"";
    foreach ($delar as $siffra) {
        echo "$tallista[$siffra] ";
    }
    echo "\"</p>";
}

?>
</body>
</html>