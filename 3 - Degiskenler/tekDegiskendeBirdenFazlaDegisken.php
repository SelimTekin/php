<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tek Değişkende Birden Fazla Değişken</title>
</head>
<body>
    
    <?php
    
        $isim    = "Selim";
        $soyisim = "Tekin";
        $yas     = 20;
        
        // $sonuc = $isim . " " . $soyisim;
        $sonuc = "Merhaba" . $isim . " " . $soyisim . "<br/>" . "Yaşım: " . $yas;

        // $sonuc = "{$isim} {$soyisim}"; // yanlış değil

        echo $sonuc;

    ?>

</body>
</html>