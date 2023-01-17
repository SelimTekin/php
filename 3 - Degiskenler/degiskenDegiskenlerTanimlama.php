<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişken Değişkenler Tanımlama</title>
</head>
<body>
    
    <?php
    
        $deger  = "Selim";
        $$deger = "Tekin";

        echo $deger;
        echo "<br/>";
        echo $$deger;
        echo "<br/>";
        echo $Selim; // aynı

    ?>

</body>
</html>