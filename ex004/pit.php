<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tome</title>
</head>
<body>
    <header>
        <h1>Confirm.</h1>
    </header>
    <main>

    <h3>
        <?php
        
        $name = $_GET["name"];
        $lastname = $_GET["surname"];

        echo "your name is $name. your last name is $lastname.";

        ?> 
    </h3>

    </main>
</body>
</html>