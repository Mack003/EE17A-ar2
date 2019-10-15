<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 5-4</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <h2>Kontrollera Inmatning</h2><br>
        <label>Epost</label>
        <input type="email" name="epost" required>


        <button>Skicka</button>
    </form>
    <?php
/* Ta emot data */
$epost = filter_input(INPUT_POST, 'epost', FILTER_SANITIZE_STRING);
if ($epost) {
/* Explode */
$delar = explode('@', $epost);
echo "<p>Namnet är $delar[0]</p>";
echo "<p>Domänen är $delar[1]</p>";
}

?>
</body>
</html>