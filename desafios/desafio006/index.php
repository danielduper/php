<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    
<header>
    <h1>Corpo de uma divisão:</h1>
</header>

    <?php

$number1 = $_POST["num"] ?? 0;
$number2 = $_POST["num2"] ?? 0;

?>


<main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="Digite o número para ser dividido:"></label>
        <input type="number" name="num" id="num" value="<?=$number1?>">
        <label for="Será dividido por:"></label>
        <input type="number" name="num2" id="num2" value="<?=$number2?>">
        <button type="submit">sim</button>
    </form>

    <?php

if ($number1+$number2 == 0) {
$result = 0; 
$intdiv = 0;
$model = 0; 
}else{

$result = $number1/$number2; 
$intdiv = intdiv($number1, $number2);
$model = $number1%$number2; 

echo "<p>O número $number1 está sendo dividido por $number2 e dará o resultado $intdiv por inteiro, e sobra $model</p>";

}
    ?>
</main>

</body>
</html>