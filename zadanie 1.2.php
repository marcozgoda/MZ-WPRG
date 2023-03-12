<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Obliczanie średnicy koła</title>
</head>
<body>
<h1>Obliczanie średnicy koła</h1>
<form method="post" action="">
    <label for="promien">Podaj promień koła:</label>
    <input type="number" name="promien" id="promien" required>
    <button type="submit">Oblicz średnicę</button>
</form>
<?php
if (isset($_POST['promien'])) {
    $promien = $_POST['promien'];
    $srednica = $promien * 2;
    echo "<p>Średnica koła o promieniu $promien wynosi: $srednica</p>";
}
?>
</body>
</html>
