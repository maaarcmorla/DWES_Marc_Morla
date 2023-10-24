<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./802major3c.php">
        Escriu 3 números diferents
        <input type="text" name="a">
        <input type="text" name="b">
        <input type="text" name="c">
        <input type="submit" value="Enviar">

        <?php
        if ($_REQUEST["a"] > $_REQUEST["b"] && $_REQUEST["a"] > $_REQUEST["c"]) {
            echo "El primer número es el major";
        } elseif ($_REQUEST["b"] > $_REQUEST["a"] && $_REQUEST["b"] > $_REQUEST["c"]) {
            echo "El segon número es el major";
        } else {
            echo "El tercer número es el major";
        }
        ?>
    </form>
</body>

</html>