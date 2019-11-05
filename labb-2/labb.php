<?php
/* Hämta veckans horoskop från sidan, https://www.tidningennara.se/astrologi/veckans-horoskop/?sign=0
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dad joke</title>
<link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="kontainer">
    <?php
    echo "<h1>Dad joke</h1>";
    
    
        /* Hämta sida */
        $sidan = file_get_contents("https://icanhazdadjoke.com/");
    
        /* Sök på början av horoskoptexten */
        $start = strpos($sidan, "<p class=\"subtitle\">");
        if ($start !== false) {
    
            /* Sök på slutet av horoskoptexten */
            $slut = strpos($sidan, "</p>", $start);
            if ($slut !== false) {
    
                /* Plocka ut horoskoptexten */
                $dadjoke = substr($sidan, $start, $slut - $start);
                echo $dadjoke;
            } else {
                echo "<p>Hittade inte var skämtet slutade!</p>";
            }
        } else {
            echo "<p>Hittade inte var skämtet började!</p>";
        }
    ?>
</div>
</body>
</html>