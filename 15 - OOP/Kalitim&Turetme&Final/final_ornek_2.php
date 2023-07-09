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
            // Deneme adındaki metodda final ifadesi kullanıldığı için artık bu metod ismi alt sınıf veya sınıflar kullanılamaz. Hata verir.
            final public function Deneme(){ 
                return "Selim";
            }
         }

          final class Iki extends Bir{
            public function Deneme(){
                return "Tekin";
            }
         }


         $sonuc = new Iki;

         echo $sonuc->Deneme();

    ?>
</body>
</html>