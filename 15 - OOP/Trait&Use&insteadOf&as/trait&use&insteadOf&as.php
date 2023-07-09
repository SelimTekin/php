<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trait & use</title>
</head>

<body>
    <?php
    /**
     * trait     : Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
     * use       : Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
     * insteadof : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih / seçim işlemleri için kullanılır.
     * as        : Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
     */

    // Sınıf kurallarına sahiptir fakat sadece const kullanılamaz.
    trait KisiBir
    {
        public $ozellikBir = "AAA";

        public function goster()
        {
            $isimSoyisim = "Selim Tekin";
            return $isimSoyisim;
        }
    }

    trait KisiIki
    {
        public $ozellikIki = "BBB";

        public function goster()
        {
            $isimSoyisim = "Enes Dönmez";
            return $isimSoyisim;
        }
    }

    class Deneme
    {
        // Her iki trait'te de goster() metodu var. insteadOf ile KisiBir'deki goster() metodunu kullanmasını istedik.
        // insteadOf ile KisiBir'deki goster metodunu KisiIki trait'ine atadık. Yani KisiIki'deki goster metodu pasif oldu.
        // as ile metoda istediğimiz adı verebiliriz. Değiştirdikten sonra orijinal adı ile de kullanabiliriz.
        use KisiBir, KisiIki {
            KisiBir::goster insteadof KisiIki;
            KisiBir::goster as yazBir;
            KisiIki::goster as yazIki;
        }
    }

    $sonuc = new Deneme;

    echo $sonuc->yazBir() . "<br />";
    echo $sonuc->yazIki();
    ?>
</body>

</html>