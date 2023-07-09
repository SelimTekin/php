<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>static</title>
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

         // static'leri nesne oluşturmadan çağırabiliriz.
         class Islem{

            public static $isim = "Selim";

            public static function BilgiVer() {
                echo "Selim Tekin";
            }
         }

         echo Islem::$isim . "<br />"; // static ifadesi const ile kullanılamaz. ( public static const $isim -> Bu yanlış bir tanımlamadır. )
         echo Islem::BilgiVer();
    ?>
</body>
</html>