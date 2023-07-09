<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spl_autoload_register()</title>
</head>
<body>
    <?php
        /**
         * spl_autoload_register() : Doküman içerisinde belirtilecek olan sınıfın bulunmaması durumunda, belirtilecek olan parametreye göre bir sınıf dokümanını otomatik olarak belgeye dahil etmek / yüklemek için kullanılır.
         */

         function kutuphaneleriCalistir($parametreDegeri){
            $dosyaAdi = $parametreDegeri . ".php";
            require_once($dosyaAdi);
         }

         function kontrolleriCalistir($parametreDegeri){
            $dosyaAdi = $parametreDegeri . ".php";
            require_once($dosyaAdi);
         }

         spl_autoload_register("kutuphaneleriCalistir");

         // Fonksiyonu direkt parametre olarak yazsak da olur. AMA FONKSİYON İSMİ YAZMIYORUZ.
         spl_autoload_register(function($parametreDegeri){
            $dosyaAdi = $parametreDegeri . ".php";
            require_once($dosyaAdi);
         });
         
         spl_autoload_register("kontrolleriCalistir");

         $bir = new Kutuphaneler;
         echo $bir->deger . "<br />";

         $iki = new Modeller;
         echo $iki->deger . "<br />";

         $uc = new Kontroller;
         echo $uc->deger . "<br />";
    ?>
</body>
</html>