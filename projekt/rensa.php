<?php
session_start();
include_once "./konfig-db.php";
/* Logga in */
$conn = new mysqli($host, $användare, $lösenord, $databas);

/* Gick det att ansluta? */
if ($conn->connect_error) {
    die("Kunde inte ansluta till databasen: " . $conn->connect_error);
} else {
    echo "<p>Gick bra att ansluta</p>";
}

/*Genomför kommando */
$sql = "DELETE FROM `listor` WHERE `listor`.`aid` = '{$_SESSION["aid"]}'";
var_dump($id);
$result = $conn->query($sql);
var_dump($result);
/* Gick det bra? */
if (!$result) {
    die("Något blev fel");
} else {
    header("Location: lista.php");
}
