<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final</title>
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

         // Iki adındaki sınıfta final ifadesi kullanıldığı için artık bu sınıftan alt sınıf veya sınıflar türetilemez. Hata verir.
          final class Iki extends Bir{
            public function Deneme(){
                return "Tekin";
            }
         }

         // Lakin başka bir sınıftan extends edilebilir.
         class Uc extends Bir{
            public function Deneme(){
                return "Enes";
            }
         }


         $sonuc = new Uc;

         echo "<br />" . $sonuc->Deneme();

    ?>
</body>
</html>