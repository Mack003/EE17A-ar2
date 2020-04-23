<?php
/*
* PHP version 7
* @category   hämta från api
* @author     Marcus
* @license    PHP CC
*/
?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CN</title>
</head>
<body>
    <div class="body">
        <?php
        
        $joke = json_decode(file_get_contents('https://api.chucknorris.io/jokes/random'));

        ?> <img src="<?php echo $joke->icon_url ?>" alt=""> <?php
        echo $joke->value;

        ?>
    </div>
</body>
</html>