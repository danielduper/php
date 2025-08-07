<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="htdocs\style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

$salm = 1804;
$num = $_POST["num"] ?? 0;
$resu = intdiv($num, $salm);
$resu2 = $num%$salm;

?>

<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label for="salario:"></label>
    <input type="number" name="num" id="num" value="<?=$num?>">
    <button type="submit">vai.</button>
</form>

<?php

if ($num != 0) {
    echo "<p> você tem $resu sálarios minimos e mais $resu2</p>";
}

echo "<p>salário minimo atual: $salm.</p>";

?>
    
</body>
</html>