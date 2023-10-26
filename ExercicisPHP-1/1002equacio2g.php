<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $a = 3;
        $b = 6;
        $c = 2;

        $arrel = $b * $b - 4 * $a * $c;
        
        if ($arrel > 0) {
            $resultat1 = (-$b + sqrt($arrel)) / (2 * $a);
            $resultat2 = (-$b - sqrt($arrel)) / (2 * $a);
            echo "Hi ha dues solucions: $resultat1 i $resultat2";
        } elseif ($arrel == 0) {
            $resultat3 = -$b / (2 * $a);
            echo "Hi ha una solució: $resultat3";
        } else {
            echo "No hi ha solució";
        }
    ?>
</body>

</html>