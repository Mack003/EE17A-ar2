<?php
include_once "./funktioner.inc.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbshop - steg 3 - Moderkort</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <div class="kontainer">
    <h1>Bygg din egen PC - steg 3</h1>
    <h2>Varukorg</h2>
    <?php

    function formNamn($namn)
    {
        $delnamn = explode('-', $namn);
        array_splice($delnamn, -1);
        $namn = join(' ', $delnamn);

        return $namn;
    }
    /* Visa innehållet på varukorgen = varukorg.txt */
    /* Läs in textfilen varukorg.txt i en array */
    $varukorg = "./varukorg.txt";
    if(is_writable($varukorg)) {
        $vara = filter_input(INPUT_POST, 'vara', FILTER_SANITIZE_STRING);

        $fil = fopen($varukorg, 'a');
        fwrite($fil, "$vara\n");
        fclose($fil);
    }

    if (is_readable($varukorg)) {
    $rader = file($varukorg);

    /* Skriv ut som tabell*/
    echo "<table>";
    echo "<tr><th>Vara</th><th>Pris</th></tr>";
    foreach ($rader as $rad) {
        $vara = vara($rad);
        $pris = pris($rad);
        echo "<tr><td>$vara</td><td>$pris</td></tr>";
    }
     echo "</table>";
} else {
    echo "<p>Varukorgen Saknas!</p>";
}
    /* Stäng textfilen */

    ?>
    <h2>Välj Moderkort</h2>
    <form action="./steg4.php" method="post">
    <?php
    /* Lista alla produkter i katalogen */
    $katalog = "./shop-bilder/mobo";

     /* Skanna av katalog */
     $filer = scandir($katalog);

     /* Skriv ut skiten */
     foreach ($filer as $fil) {
        $info = pathinfo("./$fil");
        if ($info['extension'] == 'png' || $info['extension'] == 'jpg') {

            $namn = formNamn($fil);

            echo "<label>";
            echo "<input type=\"radio\" name =\"vara\" value =\"$fil\">";
            echo "<img src=\"$katalog/$fil\">";
            echo "$namn";
            echo "</label>";
        }
    }


    ?>
    <button>Nästa</button>
    </form>
    </div>
</body>
</html>