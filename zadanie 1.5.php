<?php

function obliczPoleTrojkata() {
    $podstawa = readline("Podaj długość podstawy: ");
    $wysokosc = readline("Podaj wysokość: ");
    $pole = 0.5 * $podstawa * $wysokosc;
    return $pole;
}

function obliczPoleProstokata() {
    $dlugosc = readline("Podaj długość boku a: ");
    $szerokosc = readline("Podaj długość boku b: ");
    $pole = $dlugosc * $szerokosc;
    return $pole;
}

function obliczPoleTrapezu() {
    $podstawa1 = readline("Podaj długość pierwszej podstawy: ");
    $podstawa2 = readline("Podaj długość drugiej podstawy: ");
    $wysokosc = readline("Podaj wysokość: ");
    $pole = 0.5 * ($podstawa1 + $podstawa2) * $wysokosc;
    return $pole;
}

echo "Jaką figurę chcesz obliczyć pole? \n";
echo "1. Trójkąt\n";
echo "2. Prostokąt\n";
echo "3. Trapez\n";
$figura = readline("Wybierz figurę (1-3): ");

switch ($figura) {
    case 1:
        $pole = obliczPoleTrojkata();
        echo "Pole trójkąta wynosi: " . $pole . "\n";
        break;
    case 2:
        $pole = obliczPoleProstokata();
        echo "Pole prostokąta wynosi: " . $pole . "\n";
        break;
    case 3:
        $pole = obliczPoleTrapezu();
        echo "Pole trapezu wynosi: " . $pole . "\n";
        break;
    default:
        echo "Nieprawidłowy wybór figury.\n";
}
?>
