<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parent</title>
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


         // Attribute'ları parent'larla alamayız. Metotları alabiliriz.
         class Bir{

            public $isim = "PHP";
            protected function Bilgi(){
                $metin = $this->isim;
                return $metin;
            }

         }

         class Iki extends Bir{

            public function Bilgi(){
                $metin = "JS " . parent::Bilgi();
                return $metin;
            }
         }

        //  $nesne = new Iki;

        //  echo $nesne->Bilgi();


        // ÖRNEK

        class Dersler{

            public function AAA(){
                $icerik = "PHP7<br />";
                return $icerik;
            }

            public function BBB(){
                $icerik = "JS<br />";
                return $icerik;
            }

            public function CCC(){
                $icerik = "CSS3<br />";
                return $icerik;
            }

        }

        class Egitmenler extends Dersler{

            public function AAA(){
                $kim = "Selim Tekin<br />" . parent::AAA();
                return $kim;
            }

            public function BBB(){
                $kim = "Enes Dönmez<br />" . parent::BBB();
                return $kim;
            }

            public function CCC(){
                $kim = "Lucifer Morningstar<br />" . parent::CCC();
                return $kim;
            }

        }

        $nesne = new Egitmenler;

        echo $nesne->AAA();
        echo $nesne->BBB();
        echo $nesne->CCC();
    ?>
</body>
</html>