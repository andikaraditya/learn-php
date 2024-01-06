<?php
$ninjas = ["john", "jake", "jessica"];

for($i = 0; $i < count($ninjas); $i++) {
    echo $ninjas[$i]. "<br />";
}

foreach ($ninjas as $ninja) {
    echo $ninja. "<br />";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>