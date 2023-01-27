<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sha1() ve sha1_file()</title>
</head>
<body>
    <?php
    
        /**
         * sha1()      : Belirtilecek olan içeriğin sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
         * sha1_file() : Belirtilecek olan dosyanın sha1 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
         */
    

        // $sifre   = "132456";
        // $olustur = sha1($sifre);
        // echo $olustur;

        // $dosya   = "phplogin.rar";
        // $olustur = sha1($dosya); // sha1_file() değil de sha1() fonksiyonu kullanılırsa dosya değişkenini bir string olarak algılar.
        // echo $olustur;

        $dosya   = "phplogin.rar";
        $olustur = sha1_file($dosya);
        echo $olustur;
    ?>
</body>
</html>