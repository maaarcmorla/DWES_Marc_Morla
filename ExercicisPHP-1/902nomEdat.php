<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./902nomEdat.php">
        Escriu la teva edat
        <input type="text" name="edat">
        <input type="submit" value="Enviar">

        <?php
        if ($_REQUEST["edat"] <= 3) {
            echo "Nadó";
        } elseif ($_REQUEST["edat"] >= 3 && $_REQUEST["edat"] <= 12) {
            echo "Infant";
        } elseif ($_REQUEST["edat"] >= 13 && $_REQUEST["edat"] <= 17) {
            echo "Adolescent";
        } elseif ($_REQUEST["edat"] >= 18 && $_REQUEST["edat"] <= 66) {
            echo "Adult";
        } else {
            echo "Jubilat";
        }
        ?>
    </form>
</body>

</html>