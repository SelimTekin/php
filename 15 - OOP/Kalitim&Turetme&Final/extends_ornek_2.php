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

         class Bir{
            public function Deneme(){
                return "Selim";
            }
         }

         class Iki extends Bir{
            public function Deneme(){
                return "Tekin";
            }
         }

         class Uc extends Iki{
            public function Deneme(){
                return "Enes";
            }
         }

         class Dort extends Uc{
            public function Deneme(){
                return "Dönmez";
            }
         }

         class Bes extends Dort{
            public function Deneme(){
                return "PHP";
            }
            
            public function Dizi(){
                $arr = array("Birinci" => Bir::Deneme(), "Ikinci" => Iki::Deneme(), "Ucuncu" => Uc::Deneme(), "Dorduncu" => Dort::Deneme(), "Besinci" => $this->Deneme());
                return $arr;
            }

            public function birUstSinif(){
                return Dort::Deneme();
                // veya parent:: kullanabiliriz.
                // return parent::Deneme();
            }
         }

         $sonuc = new Bes;

         print_r($sonuc->Dizi());
         echo "<br />" . $sonuc->birUstSinif();

    ?>
</body>
</html>