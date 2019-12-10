<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logga in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="#" method="POST">
    <h2>Logga in</h2>
    <label>Användarnamn</label>
    <input type="text" name="anamn" placeholder="Tex erik12" required>
    <label>Lösenord</label></form>
    <input type="password" name="lösen" required></form>
    </ul>
    <button>Skicka</button>
    <?php
    $namn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
    $lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);

    /* Läs in textfil */
    $register = "konton.txt";
    /* Öppna textfil eller dö */
    $rader = file($registera) or die ("Fel: Filen går inte att öppna.");
    /* Dela upp listan  till rader*/
    foreach($rader as $rad) {
    /* Dela upp rad */
    $delar = explode("-", $rad);
    $hash = $delar[0];
    $anamn = $delar[1];

    if (password_verify($hash)) {
        
    }

    }
    ?>
</body>
</html>