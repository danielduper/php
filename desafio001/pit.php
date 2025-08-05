<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>

<?php 
$number = $_GET["number"] ?? null;
$numbera = $_GET["number"]-1 ?? null;
$numbers = $_GET["number"]+1 ?? null;
?>

    <main>
<?php
    if ($number == null) {
        echo "<p>youre gay coloca a porra de um número</p>";
    }else{

        echo "<p>Seu número é:</p>";
        
        echo "<p>$number (seu número)</p>";
        echo "<p>$numbera (antecessor do seu número)</p>";
        echo "<p>$numbers (sucessor do seu número)</p>";
    }
        ?>

        <a href="index.html">voltar.</a>
    </main>
    
</body>
</html>