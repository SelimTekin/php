<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniqid(), md5() ve md5_file()</title>
</head>
<body>
    <?php
    
        /**
         * uniqid() : Mikrosaniye cinsinden geçerli zamana dayalı olarak belirtilen önek ile benzersiz / eşsiz bir değer üreterek / ürettiği değeri geriye döndürür.
         * md5()    : Belirtilecek olan içeriğin md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
         * md5_file()    : Belirtilecek olan dosyanın md5 özetini hesaplayıp bularak, bulduğu değeri geriye döndürür.
         */
    

        // // $olustur = uniqid();
        // $deger   = "}/+(-*Af&=^"; // ön ek
        // $olustur = uniqid($deger, true); // Her zaman benzersiz olur. Aynısından bi tane daha üretmez. true -> sona döküntü ekler. Yani rastgele bi şeyler.
        // echo $olustur;


        // $sifre   = "7412563";
        // $olustur = md5($sifre); // md5 asla çözülemez. Bazı siteler var dönüştüren. Onlar veritabanına basit şeyleri kaydetmişler onları getiriyolar yoksa md5 geri dönüştürülemez.
        // echo $olustur;

        // $dosya   = "phplogin.rar";
        // $olustur = md5($dosya); // md5_file() değil de md5() fonksiyonu kullanılırsa dosya değişkenini bir string olarak algılar.
        // echo $olustur;

        // $dosya   = "phplogin.rar"; // sadece rar değil png, zip felan da olabilir.
        // $olustur = md5_file($dosya); // dosya boyutu değiştikçe md5 özeti de değişir
        // echo $olustur;


        // $olustur = md5(uniqid()); // siteye resim yükleme işlemlerinde kullanılıyor genelde. Sürekli benzersiz bir değer üretir.
        // echo $olustur;

        $olustur = md5(uniqid(mt_rand())); // uniqid'ye ön ek verdik. Bu daha güvenli oldu. mt_rand() rastgele sayı üretir.
        echo $olustur;

    ?>
</body>
</html>