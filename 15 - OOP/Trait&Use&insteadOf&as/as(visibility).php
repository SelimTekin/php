<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>as (visibility)</title>
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
        public function goster(){
            $isimSoyisim = "Selim Tekin";
            return $isimSoyisim;
        }
     }

     // Deneme sınıfı üstünde yazılan kodlarda goster metodunu kullanıp Deneme sınıfında erişilmesin yani private olsun istiyorsak as ile private yaparız. Tam tersi olabilir.
     class Deneme{
        use Kisi{
            Kisi::goster as private; // Hata verir, çünkü metod burada private görünürlük değerine değiştirildi.
        }
     }

     $sonuc = new Deneme;

     echo $sonuc->goster();
    ?>
</body>

</html>