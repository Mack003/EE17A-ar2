<?php
session_start();
/* Är användaren inte inloggad? */
if (!$_SESSION['login']) {
/* Nej, gå till loginsidan */
$_SESSION['login'] = false;
header("location: ./login.php?fram=skriva");
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bloggen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Bloggen</h1>
        <nav>
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link active" href="./lasa.php">Läsa</a></li>
                <li class="nav-item"><a class="nav-link" href="./skriva.php">Skriva</a></li>
                <?php if (!$_SESSION['login']) { ?>
                <li class="nav-item"><a class="nav-link" href="./login.php">Logga in</a></li>
                <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Logga ut</a></li>
    <?php } ?>                

            </ul>
        </nav>
        <?php
        $blogg = "./blogg.txt"; 
    $inlagg = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    if ($inlagg) {
        /* Spara ner i textfil */
        $datum = date("F j, Y, g:i a");
        $handtag = fopen($blogg, 'a');
        fwrite($handtag, "$datum: $inlagg\n");
        fclose($handtag);
    }
    
    $rader = file($blogg);
    $rader = array_reverse($rader);
    foreach ($rader as $rad) {
        echo "<div class=\"inlagg\"><p>$rad</p></div>";
    }
    ?>
    </div>
</body>
</html>