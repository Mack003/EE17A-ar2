<?php
include_once "./funktioner.inc.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbshop - steg 1</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>

    <div class="kontainer">
    <h1>Bygg din egen PC - steg 1</h1>
    <h2>Varukorg</h2>
    <?php
    $katalog = "./shop-bilder/cpu";

    echo "<h2>Steg 1 - Välj cpu</h2>";
    /* Läs av katalog */
    $filer = scandir($katalog);
    echo "<form action=\"./steg02.php\" method=\"POST\">";
    foreach ($filer as $fil) {
         if ($fil != "." && $fil != "..") {
             $namn = varaNamn($fil);
             $pris = varaPris($fil);
             $bild = "<img src=\"$katalog/$fil\">";
            echo "<label><input type=\"radio\" name=\"vara\" value=\"$fil\" required>";
            echo "$bild $namn $pris:-</label>";
            
        }
    }
?>
    <button>Nästa</button>
    </form>
    </div>
</body>
</html>