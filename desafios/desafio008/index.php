<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
$num = $_POST["num"] ?? 0;
?>


<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <label for="numero: "></label>
    <input type="number" name="num" id="num" value="<?="$num"?>">
    <button type="submit">tome.</button>
</form>

<?php 
if ($num != 0) {
$numq = $num**(1/2);
$numc = $num**(1/3);

echo "<p>seu numero é $num</p>";
echo "<p>a raiz quadrada dele é $numq</p>";
echo "<p>a raiz cúbica dele é $numc</p>";
}
?>

</body>
</html>