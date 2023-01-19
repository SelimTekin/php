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
    
        // $deger = "Selim Tekin";
        // define("ISIM", $deger);

        // echo ISIM;                   // sorunsuz çalışır


        $degerBir = "Selim";
        $degerIki = "Tekin";
        define("ISIM", $degerBir . " " . $degerIki);

        echo ISIM;                      // sorunsuz çalışır

        // $deger = "Selim Tekin";
        // const ISIM = $deger;

        // echo ISIM;                   // HATA, yalnızca define() içinde değişken ataması yapılabilir. const'ta yapılamaz.


        // define ile değer bir değişkenden gelebilir. Ama const ile değer kesinlikle manuel olarak yazılmalıdır. 
    
    ?>
</body>
</html>