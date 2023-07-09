<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__construct() & __destruct()</title>
</head>
<body>
    <?php
        /** __construct() : Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır. Nesne oluşturulduğu anda çalışır.
         *  __destruct()  : Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
         */

         class Deneme{
            
            public function __construct()
            {
                echo "Sınıf Çalıştı ve Yapıcı Metod Devreye Girdi.<br />";
            }

            public $isim    = "Selim";
            public $soyisim = "Tekin";

            public function Yaz(){
                $metin = "PHP";
                return $metin;
            }

            public function __destruct()
            {
                echo "Sınıf İçerisindeki Tüm Özellik ve Metotların Çalışması Tamamlandığı İçin Yıkıcı Metot Devreye Girdi.";
            }
         }

         $islem = new Deneme;

         echo $islem->isim . " " . $islem->soyisim . " " . $islem->Yaz() . "<br />";
    ?>
</body>
</html>