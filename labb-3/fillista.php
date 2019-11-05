<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Filer</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
    <h1>Fillista</h1>
    <table>
    <?php
    $fillista = "../labb-3/bilder";

    /* Skanna av katalog */
    $resultat = scandir($fillista);

    /* Skriv ut skiten */
    foreach ($resultat as $objekt) {
        /* Ta inte med . och .. */
        if ($objekt !='.' && $objekt != '..') {

            /* Katalog? */
            if (is_dir("$fillista/$objekt")) {
                echo "<tr><td><i class='far fa-folder' style='font-size:24px'></i></td><td>$objekt</td></tr>";
            } else {
                $filinfo = pathinfo($objekt);
                $filtyp = $filinfo['extension'];
                if ($filtyp == 'png' or $filtyp == 'jpg') {
                    echo "<tr><td><img src='$fillista/$objekt'></td><td>$objekt</td></tr>";
                } else {
                    echo "<tr><td><i class='fas fa-file' style='font-size:24px'></i></i></td><td>$objekt</td></tr>";
                }


            }
    }
}
    ?>
    </table>
    </div>
</body>
</html>