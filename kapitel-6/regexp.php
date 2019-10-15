<?php
/* Regexp = Regular expression = Reguljära uttryck */

/* På samma sätt som strstr */
$adress = "Craafords värg 23";
if (preg_match("/väg/", $adress)) {
    echo "<p>Text innehåller ordet 'väg'<./p>";
} else {
    echo "<p>Text innehåller inte ordet 'väg'.</p>";
}

if (preg_match("/2/", $adress)) {
    echo "<p>Text innehåller '2'<./p>";
} else {
    echo "<p>Text innehåller inte '2'.</p>";
}
/* Leta siffror */
if (preg_match("/[0-9]/", $adress)) {
    echo "<p>Text innehåller 'siffror'<./p>";
} else {
    echo "<p>Text innehåller inte 'siffror'.</p>";
}
/* Leta gemena bokstäver */
if (preg_match("/[a-zåäö]/", $adress)) {
    echo "<p>Text innehåller 'bokstäver'<./p>";
} else {
    echo "<p>Text innehåller inte 'bokstäver'.</p>";
}
/* sök att tecken inte finns */
if (preg_match("/[^_]/", $adress)) {
    echo "<p>Text innehåller inte understreck<./p>";
} else {
    echo "<p>Text innehåller understreck.</p>";
}

if (preg_match("/a+/", $adress)) {
    echo "<p>Text innehåller en eller flera A<./p>";
} else {
    echo "<p>Text innehåller inte A</p>";
}

if (preg_match("/a{1,2/", $adress)) {
    echo "<p>Text innehåller en eller två A<./p>";
} else {
    echo "<p>Text innehåller inga eller över 2 A</p>";
}
/* Leta alternativa ord */
if (preg_match("/a{väg|gata/", $adress)) {
    echo "<p>Text innehåller ordet väg eller gata<./p>";
} else {
    echo "<p>Text innehåller inte väg eller gata</p>";
}

?>