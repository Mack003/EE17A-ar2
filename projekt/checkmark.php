<?php
session_start();
include_once "./konfig-db.php";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
$klar = filter_input(INPUT_GET, 'klar', FILTER_SANITIZE_STRING);
/* 1. Logga in */
$conn = new mysqli($host, $användare, $lösenord, $databas);

/* Gick det att ansluta? */
if ($conn->connect_error) {
    die("Kunde inte ansluta till databasen: " . $conn->connect_error);
} else {
    echo "<p>Gick bra att ansluta</p>";
}

/* 2.  */
$sql = "UPDATE `listor` SET `klar` = '$klar' WHERE `id` = '$id'";
var_dump($id);
$result = $conn->query($sql);
var_dump($result);
/* Gick det bra? */
if (!$result) {
    die("Något blev fel");
} else {
    header("Location: lista.php");
}
