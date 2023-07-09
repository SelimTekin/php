<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$this & self::</title>
</head>
<body>
    <?php
        /** 
         * Visibility (Görünebilirlik)
         * ---------------------------
         * public   : Genel. Her yerden erişilebilir.
         * private   : Özel. Yalnızca sınıf içerisinden erişilebilir.
         * protected : Korumalı. Sınıf içerisinden ve türetilen sınıflardan erişilebilir.
         * 
         * Erişebilirlik
         * ----------------------------
         * static    : Sabit. Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilebilir.
         * 
         * $this     : "Bu sınıfta" şeklinde sınıfı işaret etmek için kullanılır.
         * self::    : "Kendi sınıfımda" şeklinde sınıfı işaret etmek için kullanılır.
         * parent::  : "Ebeveyn sınıfımda" şeklinde sınıfı işaret etmek için kullanılır.
         */

         class Bir{

            private $isim = "Selim";
            private const SOYISIM = "Tekin";

            // attribute'lar private olmasına rağmen public bir metodda kullandığımız için dışarıya aktarabiliyoruz. (protected'da da aynı)
            public function Bilgi(){
                $metin = $this->isim . " " . self::SOYISIM . " PHP Eğitimi"; // değişkenlerde $this, sabitlerde self:: kullanılır.
                return $metin;
            }
         }

         $nesne = new Bir;

         echo $nesne->Bilgi();
    ?>
</body>
</html>