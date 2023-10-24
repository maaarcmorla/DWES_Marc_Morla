<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $edat = $_GET["edat"];
        echo "Edat: $edat <br>";
        $anyActual = date("Y");
        echo "Any actual: $anyActual <br><br>";

        $edat2 = $edat + 10;
        echo "Edat d'aqui 10 anys: $edat2 <br>";
        $anyActual2 = $anyActual + 10;
        echo "Any d'aqui 10 anys: $anyActual2 <br><br>";

        $edat3 = $edat - 10;
        echo "Edat fa 10 anys: $edat3 <br>";
        $anyActual3 = $anyActual - 10;
        echo "Any fa 10 anys: $anyActual3 <br><br>";
    ?>
</body>

</html>