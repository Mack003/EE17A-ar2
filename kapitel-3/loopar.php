<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
//Skriv ut tio tal till 1..10
echo "<p>Steg: ";
for ($i = 0; $i < 10; $i++) {
    echo "<p>$i, </p>";
}

echo "<p>Steg: ";
for ($i = 0; $i < 10; $i++) {
    echo "<p>$i, </p>";
}

//multiplikationstabellen
echo "<table>";
echo "<tr>
    <th>Talet</th><th>talet ggr 10</th>
    </tr>";
for ($i = 0; $i < 10; $i++) {
    $i10 = $i * 10;
    echo "  <tr>
                <td>$i</tr></td>$i10</td>
                </tr>";
}
//räkna ner från 10 till 1
echo "</table>";
echo "<table>";
echo "<tr>
    <th>Talet</th><th>talet ggr 10</th>
    </tr>";
for ($i = 10; $i > 0; $i--) {
    echo "  <tr>
                <td>$i</tr>
                </tr>";
}
echo "</table>";
//Räkna ner 100 81 64 48 36 25 16 9 4 1
echo "<table>";
echo "<tr>
    <th>Kvadraten</th>
    </tr>";
$i = 10;
while ($a <= 10) {
    $i2 = $i * $i;
    echo " <tr>
    <td>$i2</td>
    </tr>";
    $i--;
}
echo "</table>";
?>
</body>
</html>