<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__METHOD__</title>
</head>
<body>
    <?php
    
    /**
     * __METHOD__ : Phph dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan metodun, metot adı bilgisi değerini döndürür.
     */
    

    class Deneme{
        function ornek1(){
            $sonuc1 = __METHOD__;
            echo $sonuc1;
        }

        function ornek2(){
            $sonuc2 = __METHOD__;
            echo $sonuc2;
        }
    }

    $islem = new Deneme;

    $islem->ornek1(); // Çıktı : Deneme::ornek1 (Deneme sınıfı içinde ornek1 metodu)
    echo "<br/>";
    $islem->ornek2(); // Çıktı : Deneme::ornek2 (Deneme sınıfı içinde ornek2 metodu)

    ?>
</body>
</html>