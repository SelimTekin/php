<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trait (abstract)</title>
</head>

<body>
    <?php
    /**
     * trait     : Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
     * use       : Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
     * insteadof : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
     * as        : Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
     */

     trait Kisi{
        abstract public function goster();
     }

     class Deneme{
        use Kisi;

        // Kisi trait'inde goster() metodu abstract olduğundan dolayı burada yazmak zorundayız. (use Kisi yazmayı unutma)
        public function goster(){
            $isimSoyisim = "Selim Tekin";
            return $isimSoyisim;
        }
     }

     $sonuc = new Deneme;

     echo $sonuc->goster();
    ?>
</body>

</html>