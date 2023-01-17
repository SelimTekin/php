<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değisken İçinde Değişken Tanımlama</title>
</head>
<body>
    
    <?php
        
        $Isim = "Selim";
        $soyisim = "Tekin";
        $deneme = "Merhaba {$Isim} {$soyisim}";

        echo $deneme;

    ?>

</body>
</html>