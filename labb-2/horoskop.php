<?php
/* Hämta veckans horoskop från sidan, https://www.tidningennara.se/astrologi/veckans-horoskop/?sign=0
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Veckans horoskop</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
    <?php
    echo "<h1>Veckans horoskop</h1>";
    
    /* skapa en array av horoskoptecken */
    $tecknen = ["Väduren", "Oxen", "Tvillingarna", "Kräftan", "Lejonet", "Jungfru", "Vågen", "Skorpionen", "Skytten", "Stenbocken", "Vattumannen", "Fiskarna"];
    
    /* Hämta sidorna med horoskopen en-och-en */
    foreach ($tecknen as $index => $tecken) {
        $i = $index + 1;
    
        /* Hämta sida */
        $sidan = file_get_contents("https://www.tidningennara.se/astrologi/veckans-horoskop/?sign=$i%22");
    
        /* Sök på början av horoskoptexten */
        $start = strpos($sidan, "<div class=\"col-xs-7 col-sm-7\">") + 33;
        if ($start !== false) {
    
            /* Sök på slutet av horoskoptexten */
            $slut = strpos($sidan, "</div>", $start) + 6;
            if ($slut !== false) {
    
                /* Plocka ut horoskoptexten */
                $horoskop = substr($sidan, $start, $slut - $start);
                echo $horoskop;
            } else {
                echo "<p>Hittade inte var horoskopet slutade!</p>";
            }
        } else {
            echo "<p>Hittade inte var horoskopet började!</p>";
        }
    }
    ?>
</div>
</body>
</html>