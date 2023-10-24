<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

$numero = 139;
$numeronuevo = $numero;
$division = 0;
$cont500 = 0;
$cont200 = 0;
$cont100 = 0;
$cont50 = 0;
$cont20 = 0;
$cont10 = 0;
$cont5 = 0;
$cont2 = 0;
$cont1 = 0;

while ($numeronuevo > 500){
    $division = $numeronuevo/500;
    $numeronuevo = $numeronuevo - (intval($division)*500);
    $cont500 = intval($division);
}

echo("<br>Billetes de 500: ".$cont500);

while ($numeronuevo > 200){
    $division = $numeronuevo/200;
    $numeronuevo = $numeronuevo - (intval($division)*200);
    $cont200 = intval($division);
}

echo("<br>Billetes de 200: ".$cont200);

while ($numeronuevo > 100){
    $division = $numeronuevo/100;
    $numeronuevo = $numeronuevo - (intval($division)*100);
    $cont100 = intval($division);
}

echo("<br>Billetes de 100: ".$cont100);

while ($numeronuevo > 50){
    $division = $numeronuevo/50;
    $numeronuevo = $numeronuevo - (intval($division)*50);
    $cont50 = intval($division);
}

echo("<br>Billetes de 50: ".$cont50);

while ($numeronuevo > 20){
    $division = $numeronuevo/20;
    $numeronuevo = $numeronuevo - (intval($division)*20);
    $cont20 = intval($division);
}

echo("<br>Billetes de 20: ".$cont20);

while ($numeronuevo > 10){
    $division = $numeronuevo/10;
    $numeronuevo = $numeronuevo - (intval($division)*10);
    $cont10 = intval($division);
}

echo("<br>Billetes de 10: ".$cont10);

while ($numeronuevo > 5){
    $division = $numeronuevo/5;
    $numeronuevo = $numeronuevo - (intval($division)*5);
    $cont5 = intval($division);
}

echo("<br>Billetes de 5: ".$cont5);

while ($numeronuevo > 2){
    $division = $numeronuevo/2;
    $numeronuevo = $numeronuevo - (intval($division)*2);
    $cont2 = intval($division);
}

echo("<br>Monedas de 2: ".$cont2);

while ($numeronuevo == 1){
    $cont1 = 1;
    $numeronuevo = 0;
}

echo("<br>Monedas de 1: ".$cont1);
echo("<br>Dinero inicial: ".$numero);

?>
</body>

</html>