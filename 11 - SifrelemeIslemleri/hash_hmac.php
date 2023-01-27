<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash_hmac_algos(), hash_hmac() ve hash_hmac_file()</title>
</head>
<body>
    <?php
    
        /**
         * hash_hmac_algos() : PHP yazılımı içerisinde anahtarlı olarak HMAC (Hash-based Message Autentication Code) (Karma Tabanlı İleti Kimlik Doğrulama Kodu)
         * yöntemi ile kullanılabilecek olan sisteme tanımlı tüm algoritmaların listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak,
         * oluşturduğu dizi değerini geriye döndürür.
         * hash_hmac()       : Belirtilecek olan içeriğin HMAC yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
         * hash_hmac()       : Belirtilecek olan dosyanın HMAC yöntemi ile hash özetini üreterek, ürettiği değeri geriye döndürür.
         */

        
        // $degerler = hash_hmac_algos();

        // echo "<pre>";
        // print_r($degerler);
        // echo "</pre>";


        // $icerik = "Selim Tekin";
        // echo "Orijinal içerik : " . $icerik . "<br />";

        // $uret   = hash_hmac("md5", $icerik, "lkjbnmwe"); // 3. parametre olan gizli anahtarla beraber şifrelenir
        // echo "md5 ile oluşturulmuş içerik : " . $uret . "<br />";


        $icerik   = "phplogin.rar";
        $anahtar = "gizliBirAnahtar";

        echo "Orijinal içerik : " . $icerik . "<br /><br />";

        $uretBir   = hash_hmac_file("md5", $icerik, $anahtar);
        echo "md5 algoritması ile üretilmiş hash : " . $uretBir . "<br /><br />";

        $uretIki   = hash_hmac_file("snefru256", $icerik, $anahtar);
        echo "snefru256 algoritması ile üretilmiş hash : " . $uretIki . "<br /><br />";

        $uretUc   = hash_hmac_file("ripemd320", $icerik, $anahtar);
        echo "ripemd320 algoritması ile üretilmiş hash : " . $uretUc . "<br /><br />";

        $uretDort   = hash_hmac_file("sha1", $icerik, $anahtar);
        echo "sha1 algoritması ile üretilmiş hash : " . $uretDort . "<br /><br />";

        $uretBes   = hash_hmac_file("sha3-512", $icerik, $anahtar);
        echo "sha3-512 algoritması ile üretilmiş hash : " . $uretBes;
    
    ?>
</body>
</html>