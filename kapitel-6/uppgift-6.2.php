<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 6-2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    
    $mat = "tomat och gurka";
    if (preg_match("/to{1,2}/", $mat)) {
        echo "<p>Text innehåller ordet 'to'<./p>";
    } else {
        echo "<p>Text innehåller inte ordet 'to'.</p>";
    }

    ?>
</body>
</html>