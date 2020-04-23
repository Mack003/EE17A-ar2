<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skapa Inlägg</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
</head>
<body>
    <div class="kontainer">
    <h1>Lägg till inlägg</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Namn</label>
    <input type="text" name="namn" required> <br>
    <label>Inlägg</label>
    <textarea name="inlagg" id="inlagg" cols="30" rows="10"></textarea>
    <button>Skicka</button>
        <?php
        /* Läs in filen */
        $filnamn = './inlagg.csv';

        $namn = filter_input(INPUT_POST, 'namn', FILTER_SANITIZE_STRING);
        $inlagg = filter_input(INPUT_POST, 'inlagg', FILTER_SANITIZE_STRING);

        if ($namn && $inlagg) {
            $fil = fopen($filnamn, 'a');
            fwrite($fil, "\n$namn ¨ $inlagg");
            fclose($fil);
        }
        ?>
    </div>
</body>
</html>