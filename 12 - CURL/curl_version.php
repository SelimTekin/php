<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl_version()</title>
</head>
<body>
    <?php
    
        /**
         * curl_verison() : Kullanılmakta olan server'da çalışmakta olan libcurl kütüphanesinin tüm bilgilerini bulur ve bulduğu değerlerden
         * yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
         */
    

        $degerler = curl_version();

        echo "<pre>";
        print_r($degerler);
        echo "</pre>";
    ?>
</body>
</html>