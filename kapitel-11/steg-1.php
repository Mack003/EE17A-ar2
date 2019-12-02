<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <?php
    session_start();
    $_SESSION["namn"] = "Erik";
    echo "<p>sessionsvariabeln skapad</p>";
    ?>
    </div>
</body>
</html>