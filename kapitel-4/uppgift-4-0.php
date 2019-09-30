<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uppgift 4-0</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/Chalarangelo/mini.css/v3.0.1/dist/mini-default.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./uppgift-4-0.php" method="POST">
        <h2>Namnlista</h2><br>
        <label>Namnen</label>
        <input type="text" name="namn[]" required>
        <input type="text" name="namn[]" required>
        <input type="text" name="namn[]" required>
        <input type="text" name="namn[]" required>
        <input type="text" name="namn[]" required>

        <button>Skicka</button>
    </form>
    <?php
    if (isset($_POST["namn"])) {
/* Ta emot data */
$namn = filter_input_array(INPUT_POST);
print_r($namn);
/* sortera namn */
sort($namn);
/* Loopa igenom arrayen och skriv ut namnen */
foreach ($namn as $namnet) {
    echo "<p>$namnet</p>";
}
}
?>
</body>
</html>