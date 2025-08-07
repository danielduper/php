<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>self-php</title>
</head>
<body>

<?php
$valor1 = $_POST['val1'] ?? 0;
$valor2 = $_POST['val2'] ?? 0;
?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="val1">Valor 1:</label>
    <input type="number" name="val1" id="val1" value="<?=$valor1?>">
    <label for="val2">Valor 2:</label>
    <input type="number" name="val2" id="val2" value="<?=$valor2?>">
    <button type="submit">SOMAR</button>
</form>

<?php 

$soma = $valor1 + $valor2;

echo "<p>A soma dos seus valores foi de $soma</p>";

?>
    
</body>
</html>