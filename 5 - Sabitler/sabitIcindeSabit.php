<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabit İçinde Değişken Tanımlama</title>
</head>
<body>
    <?php
    
        // define("DEGER", "Selim Tekin");
        // define("VERI", DEGER);
        
        // echo VERI;


        // const DEGER = "Selim Tekin";
        // const VERI = DEGER;

        // echo VERI;


        // const DEGER = "Selim Tekin";
        // define("VERI", DEGER);

        // echo VERI;


        // $islem = "Selim Tekin";
        // define("DEGER", $islem);
        // define("VERI", DEGER);

        // echo VERI;


        // $islem      = "Selim Tekin";
        // const DEGER = $islem;
        // const VERI = DEGER;

        // echo VERI;                   // HATA, çünkü const'un değeri değişken olamaz. Dolayısıyla altındaki const da üstündeki const'un değerini alamaz
    

        $islem      = "Selim Tekin";
        define("DEGER", $islem);
        const VERI  = DEGER;

        echo VERI;                      // Sorunsuz çalışır.

    ?>
</body>
</html>