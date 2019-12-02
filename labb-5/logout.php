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
    <title>Logga ut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
    <li class="nav-item"><a class="nav-link" href="./skriva.php">Skriva</a></li>
    <li class="nav-item"><a class="nav-link" href="./login.php">Logga in</a></li>

    </nav>
    <?php
    $_SESSION['login'] = false;
    echo "<p class=\"alert alert-success\">Du är nu utloggad.</p>";
    ?>
    </div>
</body>
</html>