<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="./702_major3.php">
        Escriu 3 números diferents
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="text" name="c">
        <input type="submit" value="Enviar">

        <?php

            if ($_REQUEST["a"] > $_REQUEST["b"]) {
            }   if ($_REQUEST["a"] > $_REQUEST["c"]) { 
                echo "El primer número es el major";
            } if ($_REQUEST["b"] > $_REQUEST["a"]) {
            }   if ($_REQUEST["b"] > $_REQUEST["c"]) {
                echo "El segon número es el major";
            } if ($_REQUEST["c"] > $_REQUEST["a"]) {
            }   if ($_REQUEST["c"] > $_REQUEST["b"]) { 
                echo "El tercer número es el major";
            }

        ?>
</body>

</html>