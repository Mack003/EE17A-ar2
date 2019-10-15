<?php
/*
 * PHP version 7
 * @category   Kontrollera inmatning
 * @author     Karim Ryde <karye.webb@gmail.com>
 * @license    PHP CC
 */
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 5.5</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Domännamn Kontroll</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>domän</label>
            <input type="text" name="domain" required>
            <button class="primary">Skicka</button>
        </form>
        <?php
        /* Ta emot data som skickas */
        if ($domain) {
            /* Kontrollera att domännamnet slutar på .com, .net eller .org*/
            if (preg_match("/[.com|.net|.org$]/", $domain)) {
                echo "<p>domännamnet slutar på .com, .net eller .org</p>";
            } else {
                echo "<p>domännamnet slutar INTE på .com, .net eller .org</p>";

            /* Kontrollera att de övriga tecknen endast består av bokstäver a-z, siffror 0-9 eller bindestreck. */
            if (preg_match("/[a-z0-9\-]+.(com|net|org)$/", $domain)) {
                echo "";
            } else {
                echo "";

            /* Första tecknet måste vara en bokstav */
            if (preg_match("/^[a-z][a-z0-9\-]+.(com|net|org)$/", $domain)) {
                echo "";
            } else {
                echo "";

            /* Domännamnet ska vara minst sex tecken och högst 200 tecken långt*/
            if (preg_match("/^[a-z][a-z0-9\-]{3,195}.(com|net|org)$/", $domain)) {
                echo "";
            } else {
                echo "";
        }
        ?>
    </div>
</body>
</html>