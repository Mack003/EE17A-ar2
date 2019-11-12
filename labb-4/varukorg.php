<?php
/*
 * PHP version 7
 * @category   Webbshop
 * @author     Marcus Åkerman <marcus.akermanb3@gmail.com>
 * @license    PHP CC
 */

include_once "./funktioner.inc.php";
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webbshop - Varukorg</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    <div class="kontainer">
    <h1>Bygg din egen PC - Varukorg</h1>
    <h2>Varukorg</h2>
    <?php
function fmtnamn($namn)
{
    $delnamn = explode('-', $namn);
    $pris = explode('.', array_pop($delnamn))[0];
    $namn = join(' ', $delnamn);

    return [$namn, $pris];
}
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
if (is_writable($varukorg)) {
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
    <button>Nästa</button>
    </form>
    </div>
</body>
</html>