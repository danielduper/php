<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>PHP A FRENTE:</h1>

    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "SUA MORTE SERÁ " . date("d/m/y") . "\n";
        echo "Se prepare em " . date("G:i:s T");
    ?>
</body>
</html>