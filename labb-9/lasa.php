<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Läsa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once './admin/konfig-db.php';

        $conn = new mysqli($host, $anvandare, $losen, $databas);

        if ($conn->connect_error) {
            die ("FAN!");
        }

        $sql = "SELECT * FROM blogg";
        $result = $conn->query($sql);

        if (!$result) {
            die ("PISS!");
        }

        while($inlagg = $result->fetch_assoc()) {
            var_dump($inlagg);
        }

        $conn->close();
    ?>
</body>
</html>