<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>skriva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="rubrik">
        <textarea name="inlagg" cols="30" rows="10"></textarea>
        <button type="submit">Skriv</button>
    </form>

    <?php
        $rubrik = filter_input(INPUT_POST, 'rubrik', FILTER_SANITIZE_STRING);
        $inlagg = filter_input(INPUT_POST, 'inlagg', FILTER_SANITIZE_STRING);

        var_dump($rubrik, $inlagg);

        if ($rubrik && $inlagg) {
            var_dump("AAAAA");
            include_once './konfig-db.php';

            $conn = new mysqli($host, $anvandare, $losen, $databas);

            if ($conn->connect_error) {
                die ("FAN!");
            }

            $sql = "INSERT INTO blogg (rubrik, inlagg) VALUES ('$rubrik', '$inlagg')";
            $result = $conn->query($sql);

            if (!$result) {
                die ("PISS!");
            }

            $conn->close();
        }
    ?>
</body>
</html>