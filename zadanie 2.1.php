<?php

function pobierzLiczbe($indeks) {
    $liczby = array(2, 7, 1, 8, 4, 6, 9, 3, 5, 0);
    return $liczby[$indeks];
}
$indeks = 3;
$liczba = pobierzLiczbe($indeks);
echo "Liczba o indeksie $indeks to: $liczba";
