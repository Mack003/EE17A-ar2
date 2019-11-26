<?php
include_once "./funktioner.inc.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbshop - steg 3</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>

    <div class="kontainer">
    <h1>Bygg din egen PC - steg 3</h1>
    <h2>Varukorg</h2>
    <?php
    /* Ta emot info */
    $varukorg = "./varukorg.txt"; 
    $vara =filter_input(INPUT_POST, 'vara', FILTER_SANITIZE_STRING);
    if ($vara) {
       $varutext = file_get_contents($varukorg);
        if (strpos($varutext, $vara) === false) {

            /* Spara ner i textfil */
            $handtag = fopen($varukorg, 'a');
            fwrite($handtag, "$vara\n");
            fclose($handtag);
        }
    }
    $rader = file($varukorg);
    foreach ($rader as $rad) {
        echo "<p>$rad</p>";
    }
    

    $katalog = "./shop-bilder/disk";
    echo "<h2>Steg 3 - Välj Disk</h2>";
    /* Läs av katalog */
    $filer = scandir($katalog);
    echo "<form>";
    foreach ($filer as $fil) {
         if ($fil != "." && $fil != "..") {
             
            echo "<label><input type=\"radio\" name=\"vara\" value=\"$fil\" required>";
            echo "$fil</label>";
            
        }
    }
?>
    <button>Nästa</button>
    </form>
    </div>
</body>
</html>