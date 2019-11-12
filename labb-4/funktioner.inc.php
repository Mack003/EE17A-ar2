<?php
/*
* PHP version 7
* @category   Hjälpfunktioner
* @author     Karim Ryde <karye.webb@gmail.com>
* @license    PHP CC
*/
function vara($bilden) {
    /* Plocka ut del före punkten */
    $delar1 = explode('.', $bilden);
    /* Dela upp efter - */
    $delar2 = explode('-', $delar1[0]);
    /* Plocka ut sista delen */
    $pris = array_pop($delar2);
    /* Slå ihop övriga delar */
    $vara = implode(' ', $delar2);

    return $vara;
}
function pris($bilden) {
    /* Plocka ut del före punkten */
    $delar1 = explode('.', $bilden);
    /* Dela upp efter - */
    $delar2 = explode('-', $delar1[0]);
    /* Plocka ut sista delen = priset */
    $pris = array_pop($delar2);

    return $pris;
}