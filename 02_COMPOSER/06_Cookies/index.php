<?php

setcookie(
    name: "header_color",
    value: "#000000"
);

$color = $_COOKIE["header_color"] ?? "#121f3d";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Platzi</title>
</head>

<body>

    <header style="
            background: <?= $color ?>
        ">
        <img src="img/logo.png" alt="Platzi">
    </header>

</body>

</html>