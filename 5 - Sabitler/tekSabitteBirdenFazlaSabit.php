<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birden Fazla Sabit İçeriğini Tek Sabitte Birleştirme</title>
</head>
<body>
    <?php
    
        // define("ISIM", "Selim");
        // define("SOYISIM", "Tekin");
        // define("SONUC", ISIM . " - " . SOYISIM);

        // echo SONUC;


        // const ISIM = "Selim";
        // const SOYISIM = "Tekin";
        // const SONUC = ISIM . " - " . SOYISIM;

        // echo SONUC;


        // define("ISIM", "Selim");
        // const SOYISIM = "Tekin";
        // define("SONUC", ISIM . " - " . SOYISIM);

        // echo SONUC;


        // define("ISIM", "Selim");
        // const SOYISIM = "Tekin";
        // const SONUC = ISIM . " - " . SOYISIM;

        // echo SONUC;


        define("ISIM", "Selim");
        const SOYISIM = "Tekin";
        $islem        = "deneme ";
        define("SONUC", $islem . ISIM . " - " . SOYISIM);

        echo SONUC;
    
    ?>
</body>
</html>