<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash_algos(), hash() ve hash_file()</title>
</head>
<body>
    <?php
    
    /**
     * hash_algos() : PHP yazılım içerisinde kullanılabilecek olan ve sisteme tanımlı tüm algoritmaların litesini bulur ve bulduğu deperlerden
     * yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.
     * hash()       : Belirtilecek olan içeriğin hash özetini üreterek, ürettiği değeri geriye döndürür.
     * hash_file()  : Belirtilecek olan dosyanın hash özetini üreterek, ürettiği değeri geriye döndürür.
     */
    

    // $degerler = hash_algos();
    // echo "<pre>";
    // print_r($degerler);
    // echo "</pre>";

    // $deger = "Selim Tekin";
    // echo "Orijinal İçerik : " . $deger . "<br />";

    // $bir   = md5($deger);
    // echo "md5() metodu kullanılarak üretilmiş olan md5 özeti : " . $bir . "<br />";

    
    // $iki   = hash("md5", $deger);
    // echo "hash() metodu kullanılarak üretilmiş olan hash özeti : " . $iki . "<br />";


    // $deger = "phplogin.rar";
    // echo "Orijinal İçerik : " . $deger . "<br />";

    // $bir   = md5_file($deger);
    // echo "md5() metodu kullanılarak üretilmiş olan md5 özeti : " . $bir . "<br />";

    
    // $iki   = hash_file("md5", $deger);
    // echo "hash() metodu kullanılarak üretilmiş olan hash özeti : " . $iki . "<br />";



    // Farklı bir şifreleme algoritması kullanalım


    // $algoritma = "ripemd320";
    // $algoritma = "sha1";
    // $algoritma = "sha512";
    $algoritma = "crc32";

    $deger     = "Selim Tekin";
    echo "Orijinal İçerik : " . $deger . "<br />";
    
    $uret      = hash($algoritma, $deger);
    echo $algoritma . " ile oluşturulmuş özet : " . $uret . "<br />"; // crc32'yi hash ile kullandığımızda numeric değer üretmiyor. Karışık üretiyor.
    echo "Direkt olarak crc32 ile yapınca : " . $algoritma($deger);

    ?>
</body>
</html>