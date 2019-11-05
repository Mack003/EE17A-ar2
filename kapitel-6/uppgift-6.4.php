<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 6-4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $text = "Det var en gång en ...";
    if (preg_match("/[a-zåäö0-9 .]+/gi", $text)) {
        echo "<p>Text matchar.<./p>";
    } else {
        echo "<p>Text matchar inte.'.</p>";
    }

    ?>
</body>
</html>