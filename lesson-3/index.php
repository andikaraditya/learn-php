<?php

    $name = "Yoshi";
    $age = 30;

    define("NAME","Mario");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo "Hello Dom" ?></h1>
    <h2><?php echo $name ?></h2>
    <h2><?php echo $age?></h2>
    <h2><?php echo NAME?></h2>
</body>

</html>