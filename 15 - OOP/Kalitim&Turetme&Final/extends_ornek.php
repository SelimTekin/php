<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>extends</title>
</head>
<body>
    <?php
        /**
         * extends : Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.
         * final   : En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metodlar üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metod adı kullanılamaz.
         */

         class Islemler{

            public $isimSoyisim;
            public $aylikGelir;
            public $aylikGider;

            public function isimGoster($adSoyad){
                $this->isimSoyisim = $adSoyad;
            }

            public function gelirGoster($gelirTutari){
                $this->aylikGelir = $gelirTutari;
            }

            public function giderGoster($giderTutari){
                $this->aylikGider = $giderTutari;
            }

            public function gelirGiderHesaplamasi(){
                $netKazanilan = $this->aylikGelir - $this->aylikGider;
            }

            public function yillikKazanilan(){
                $yillikNetKazanilan = ($this->aylikGelir - $this->aylikGider) * 12;
            }

         }

         class ElemanlarDahili extends Islemler{}

         class ElemanlarHarici extends Islemler{}

         $birinciKisi = new ElemanlarDahili;
         $birinciKisi->isimGoster("Selim Tekin");
         $birinciKisi->gelirGoster("10000");
         $birinciKisi->giderGoster("4000");

         echo "Selim Tekin isimli şahsın aylık geliri 1000 TL'dir. Aylık gideri 4000 TL'dir. Aylık net kazancı " . $birinciKisi->gelirGiderHesaplamasi() . " TL'dir.<br />";
         echo "Selim Tekin isimli şahsın yıllık net kazancı " . $birinciKisi->yillikKazanilan() . " TL'dir.<br />";

         $birinciKisi = new ElemanlarHarici;
         $birinciKisi->isimGoster("Enes Dönmez");
         $birinciKisi->gelirGoster("5000");
         $birinciKisi->giderGoster("400");

         echo "Enes Dönmez isimli şahsın aylık geliri 5000 TL'dir. Aylık gideri 400 TL'dir. Aylık net kazancı " . $birinciKisi->gelirGiderHesaplamasi() . " TL'dir.<br />";
         echo "Enes Dönmez isimli şahsın yıllık net kazancı " . $birinciKisi->yillikKazanilan() . " TL'dir.<br />";

    ?>
</body>
</html>