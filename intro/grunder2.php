<?php
echo "<h1>vad är datatyper?</h1>";
?>
<p>1231231</p>
<?php
$förnamn = "Marcus";
$ålder = 17;
$telefon = "+46 12-522 35 29";
$pi = 3.14159;
$harKörkort = false;
$ee17 = ["Erik", "Marcus", "Gene", "Emil","Albin", "Carl-Axel", "Pontus"];

echo "<p>$förnamn telefon $telefon</p>";
echo "<p>pi = $pi</p>";
echo "<p>har körkort = $harKörkort</p>";
print_r($ee17);
echo $ee17[5];

?>