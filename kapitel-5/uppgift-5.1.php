<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 5-1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Kontrollera Inmatning</h2><br>
        <label>Namn</label>
        <input type="text" name="namn" required>
        <label>Adress</label>
        <input type="text" name="adress" required>
        <label>Postnr</label>
        <input type="text" name="postnr" required>
        <label>Postort</label>
        <input type="text" name="ort" required>


        <button>Skicka</button>
    </form>
    <?php
/* Ta emot data */
$namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
$adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);
$postnr = filter_input(INPUT_POST, 'postnr', FILTER_SANITIZE_STRING);
$ort = filter_input(INPUT_POST, 'ort', FILTER_SANITIZE_STRING);
if ($namn && $adress && $postnr && $postort) {

/* Kontrollera att alla fälten innehåller minst 3 tecken */
if (strlen($namn) < 3) {
    echo "<p>Namnet är för kort. vg försök igen.</p>";
}
if (strlen($adress) < 3) {
    echo "<p>Adressen är för kort. vg försök igen.</p>";
}
if (strlen($postort) < 3) {
    echo "<p>Postorten är för kort. vg försök igen.</p>";
}

/* Kontrollera att postnumret innehåller 5 tecken */
if (strlen($postnr) != 5) {
    echo "<p>Postnumret bör vara 5 tecken långt. vg försök igen.</p>";
}

/* Kontrollera att postnumret innehåller endast siffror*/
if (!is_numeric($postnr)) {
    echo "<p>Postnumret måste vara skrivet i nummer. vg försök igen.</p>";
}

}

?>
</body>
</html>