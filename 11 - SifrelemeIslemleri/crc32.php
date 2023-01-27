<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crc32()</title>
</head>
<body>
    <?php
    
        /**
         * crc32() : Belirtilecek olan içeriğin crc32 temsilini hesaplayıp bularak, bulduğu değeri geriye döndürür.
         */
    
        
        $sifre   = "123456";
        $olustur = crc32($sifre); // numeric(sayısal) değer döndürür. NEgatif değer de döndürebilir.
        echo $olustur;
    ?>
</body>
</html>