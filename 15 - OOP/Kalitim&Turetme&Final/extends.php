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

         class DenemeBir{
            // private veya protected olsa class dışından yazdıramayız.
            public $isim    = "Selim";
            public $soyisim = "Tekin";

            public function test(){
                $metin = $this->isim . " " . $this->soyisim;
                return $metin;
            }
         }

         class DenemeIki extends DenemeBir{

        }

         $nesne = new DenemeIki;

         echo $nesne->test();
    ?>
</body>
</html>