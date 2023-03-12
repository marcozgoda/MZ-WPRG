<?php

function getBirthDateFromPesel($pesel)
{
    $year = substr($pesel, 0, 2);
    $month = substr($pesel, 2, 2);
    $day = substr($pesel, 4, 2);

    $century = substr($pesel, 2, 1);
    if ($century == '0' || $century == '1') {
        $year += 1900;
    } elseif ($century == '2' || $century == '3') {
        $year += 2000;
    } elseif ($century == '4' || $century == '5') {
        $year += 2100;
    } elseif ($century == '6' || $century == '7') {
        $year += 2200;
    } elseif ($century == '8' || $century == '9') {
        $year += 1800;
    }

    $birthdate = date('d-m-y', strtotime("$year-$month-$day"));
    return $birthdate;
}
?>
