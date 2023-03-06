<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>zadnie 1.1</title>
</head>
<body>
<?php

if(array_key_exists('button', $_POST)){
    button();
}

function button()
{
    $rand = rand(1, 6);
    echo "losowa liczba to " . $rand;
}
?>

<form method="post">
    kliknij aby wylosowac numer</br></br>
    <input type="submit" name="button" value="klik">
</form>
</body>
</html>