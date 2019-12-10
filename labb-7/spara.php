<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registera</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
    <form action="#" method="POST">
        <h2>Registera</h2>
        <label>Användarnamn</label>
        <input type="text" name="anamn" placeholder="Tex erik12" required>
        <label>Lösenord</label>
        <input type="password" name="lösen" required>
        
        <button>Skicka</button>
    </form>
</div>
<?php
$anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
$lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);
$register = "konton.txt";

if ($anamn && $lösen) {
    /* Trimma användarnamn och lösenord, gör användarnamn till små bokstäver */
    $trimA = trim($anamn);
    $trimA = strtolower($trimA);
    $trimL = trim($lösen);
    /* Kryptera lösenord */
    $hashL = password_hash("$trimL", PASSWORD_DEFAULT);
    $handtag = fopen($register, "a") or die("Kunde inte öppna filen");
    fwrite($handtag, "$hashL $trimA \r\n");
    fclose($handtag);
}
?>
</body>
</html>