<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi İçerisinde Değişken ve Sabit Tanımlama</title>
</head>
<body>
    <?php
    
        $isim = "Selim";
        $soyisim = "Tekin";

        define("ESYA", "Sehpa");
        define("ARAC", "Vapur");

        const RENK = "Mavi";
        const EGİTİM = "PHP";

        $degerler = array($isim, "Soyisim" => $soyisim, ESYA, ARAC, "Renk" => RENK, EGİTİM, "Aktivite" => "Sinema");
    
        echo "<pre>";
        print_r($degerler);
        echo "</pre>";
    ?>
</body>
</html>