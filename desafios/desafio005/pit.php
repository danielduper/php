<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>

<?php 

$number = $_GET["number"];
$numbera = round("$number");
$numberf = $number;

echo "<p>número é $number</p>";
echo "<p>número inteiro é $numbera</p>";
echo "<p>número fracionado é $numberf</p>";

?>
    
</body>
</html>