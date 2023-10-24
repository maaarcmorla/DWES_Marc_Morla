<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $persona1 = ["Nom" => "Marc", "Llinatege" => "Morlá", "Ciutat" => "Palma de Mallorca"];
        $persona2 = ["Nom" => "Juan", "Llinatege" => "Alele", "Ciutat" => "Johannesburgo"];
        $persona3 = ["Nom" => "Kylian", "Llinatege" => "Ronaldo", "Ciutat" => "Río de Janeiro"];
        $personas = [$persona1, $persona2, $persona3];

        echo $personas[0][2][3];
    ?>
</body>