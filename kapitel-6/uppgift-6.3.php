<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 6-3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $text = "Det var en gång en ... det var en gång";
    if (preg_match("/[Dd]et var en gång/", $mat)) {
        echo "<p>Text innehåller texten 'Det var en gång en'<./p>";
    } else {
        echo "<p>Text innehåller inte texten 'Det var en gång en'.</p>";
    }

    ?>
</body>
</html>