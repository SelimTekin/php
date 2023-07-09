<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>public</title>
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

            public $isim = "Selim";
            public const SOYISIM = "Tekin";

            public function Bilgi(){
                $metin = "PHP Eğitimi";
                return $metin;
            }
         }

         $nesne = new Bir;

         echo "İsim Soyisim " . $nesne->isim . " " . Bir::SOYISIM . " " . $nesne->Bilgi();
    ?>
</body>
</html>