<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor em dollar</title>
</head>
<body>

<main>
<?php 

$valorr = $_GET["valor"];
$valord = number_format((float)$valorr/5.51, 2, '.', '');
    
echo "<p>ce tem R$$valorr<p>";
echo "<p>ce tem $$valord</p>";

?>

<a href="index.html"></a>

</main>

</body>
</html>