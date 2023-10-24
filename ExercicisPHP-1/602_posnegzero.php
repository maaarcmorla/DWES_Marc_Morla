<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./602_posnegzero.php">
        <input type="text" name="numero">
        <input type="submit" value="Enviar">

        <?php
            if ($_REQUEST["numero"] < 0) {
                echo "El número es negatiu";
            } if ($_REQUEST["numero"] == 0) {
                echo "El número es zero";
            } if ($_REQUEST["numero"] > 0) {
                echo "El número es positiu";
            }
        ?>
    </form>
</body>

</html>