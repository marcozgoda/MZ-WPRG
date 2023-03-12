<?php

function zadanie13($zdanie, $niepozadaneSlowa) {
    foreach ($niepozadaneSlowa as $slowo) {
        $zdanie = str_ireplace($slowo, str_repeat('*', strlen($slowo)), $zdanie);
    }
    return $zdanie;
}
$zdanie = "To zdanie zawiera niepożądane słowo: spam.";
$niepozadaneSlowa = array("kurde", "dupa");
$ocenzurowaneZdanie = zadanie13($zdanie, $niepozadaneSlowa);
echo $ocenzurowaneZdanie,"<br>";
?>
