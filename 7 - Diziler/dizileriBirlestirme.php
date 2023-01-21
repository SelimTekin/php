<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizileri Birleştirme</title>
</head>
<body>
    <?php
    
        // $isimler = array("Selim", "Tekin");
        // $renkler = array("Mavi", "Beyaz", "Siyah");   // Bu ikisini bu şekilde birleştirirsek ikisinde de 0 anahtarı olduğu için ilk gördüğü 0 anahtarının değerini alır ve ikincisini almaz.

        $isimler = array("Ad" => "Selim", "Soyad" => "Tekin");
        $renkler = array("renk1" => "Mavi", "renk2" => "Beyaz", "renk3" => "Siyah");
        $araclar = array("arac1" => "Gemi", "arac2" => "Tren"); // En doğru birleştirme bu şekilde olur. Anahtarlı şekilde yani.

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";

        echo "<pre>";
        print_r($renkler);
        echo "</pre>";

        echo "<pre>";
        print_r($araclar);
        echo "</pre>";

        $sonuc = $isimler + $renkler + $araclar;

        echo "<pre>";
        print_r($sonuc);
        echo "</pre>";

        echo $sonuc["Ad"] . "<br/>";
        echo $sonuc["Soyad"] . "<br/>";
        echo $sonuc["renk1"] . "<br/>";
        echo $sonuc["renk2"] . "<br/>";
        echo $sonuc["renk3"] . "<br/>";
        echo $sonuc["arac1"] . "<br/>";
        echo $sonuc["arac2"];
    
    ?>
</body>
</html>