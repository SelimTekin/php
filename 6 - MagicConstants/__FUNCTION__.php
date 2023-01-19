<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__FUNCTION__</title>
</head>
<body>
    <?php
    
    /**
     * __FUNCTION__ : PHP dosyası içerisinde bulunduğu fonksiyonun, fonksiyon adı bilgisi değerini döndürür.
     */

    function deneme(){
        $sonuc = __FUNCTION__;
        echo $sonuc;            // İlgili fonksiyonun adını yazar.
    }
    deneme();
    
    ?>
</body>
</html>