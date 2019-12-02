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
    <title>Logga in</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
/* Ta emot data */
$anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
$lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);

/* Skriv ut resultat */
if ($anamn == "123" && $lösen == "321") {
    $_SESSION['login'] = true; ?>

    <div class="kontainer">
    <h1>Bloggen</h1>
    <nav>
    <?php
    $fran =filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
    if ($fran != "skriva") {
        echo "<p class=\"alert alert-info\">För att skriva ett inlägg bör du logga in!</p>";
    }
    ?>
    <ul class="nav nav-pills">
    <li class="nav-item"><a class="nav-link" href="./lasa.php">Läsa</a></li>
    <li class="nav-item"><a class="nav-link" href="./skriva.php">skriva</a></li>
    <?php if (!$_SESSION['login']) { ?>
    <li class="nav-item"><a class="nav-link active" href="./login.php">Logga in</a></li>
    <?php } else { ?>
    <li class="nav-item"><a class="nav-link active" href="./logout.php">Logga ut</a></li>
    <?php } ?>
    </nav>

    <form action="#" method="POST">
    <h2>Logga in</h2>
    <label>Användarnamn</label>
    <input type="text" name="anamn" placeholder="Tex erik12" required>
    <label>Lösenord</label></form>
    <input type="password" name="lösen" required></form>
    </ul>
    <button>Skicka</button>
    
    <?php
    

    /* Ta emot data */
$anamn = filter_input(INPUT_POST, 'anamn', FILTER_SANITIZE_STRING);
$lösen = filter_input(INPUT_POST, 'lösen', FILTER_SANITIZE_STRING);

/* Skriv ut resultat */
if ($anamn == "123" && $lösen == "321") {
    echo "<p class=\"alert alert-success\">Du är inloggad</p>";
    $_SESSION['login'] = true;
} else {
    header("Location: uppgift-3-2.php?fel=ja");
    echo "<p class=\"alert alert-warning\">Fel användarnamn eller lösenord. Försök igen!</p>";

}
    ?>
    

    </div>
</body>
</html>