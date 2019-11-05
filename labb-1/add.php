<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Labb 1</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
    <div class="kontainer">
    <h1>Lägg till restaurang</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Namn</label>
    <input type="text" name="namn" required>
    <label>Gata</label>
    <input type="text" name="gata" required>
    <label>Postnr</label>
    <input type="text" name="postnr" required>
    <label>Adress</label>
    <input type="text" name="adress" required>
    <button>Skicka</button>
        <?php
        /* Läs in filen */
        $filnamn = './restauranger.csv';

        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $gata = filter_input(INPUT_POST, 'gata', FILTER_SANITIZE_STRING);
        $postnr = filter_input(INPUT_POST, 'postnr', FILTER_SANITIZE_NUMBER_INT);
        $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_STRING);

        if ($namn && $gata && $postnr && $adress) {
            $fil = fopen($filnamn, 'a');
            fwrite($fil, "\n$namn, $gata, $postnr, $adress");
            fclose($fil);
        }
        ?>
    </div>
</body>
</html>