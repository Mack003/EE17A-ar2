<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 1-2</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if (isset($_REQUEST["fel"])) { 
    $fel=$_REQUEST["fel"];
    if ($fel == "ja") {
    echo "<p>Fel användarnamn eller lösenord. Försök igen</p>";
    }
}
    ?>
    <form action="./skript-3-2.php" method="POST">
        <h2>Kontaktuppgifter</h2><br>
        <label>Användarnamn</label>
        <input type="text" name="anamn" placeholder="Erik123" required>
        <label>Lösenord</label>
        <input type="password" name="lösen" placeholder="********" required>


        <button>Skicka</button>
    </form>
</body>
</html>