<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__CLASS__</title>
</head>
<body>
    <?php
    
    /**
     * __CLASS__ : PHP dosyası içerisinde bulunduğu sınıfın, sınıf adı bilgisi değerini döndürür.
     */
    

    class Deneme{
        function deger(){
            $sonuc = __CLASS__;
            echo $sonuc;
        }
    }

    $islem = new Deneme;

    $islem->deger(); // sınıftaki fonksiyonu çağırma bu şekilde olur.
    ?>
</body>
</html>