<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract</title>
</head>

<body>
    <?php
    /**
     * abstract   : Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır. Alt sınıflarda zorunlu olarak kullanılacak olan metodlar varsa abstract kullanılabilir. Interfacede de aynı şekilde.
     * 
     * interface  : Belirtilecek olan herhangi bir sınıfı, soyut arayüz sınıf haline dönüştürmek için kullanılır. Veritabanı ve önyüz işlemlerinde kullanılır.
     * 
     * implements : Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını, ilgili sınıfa tanımlamak / uygulamak için kullanılır.
     * 
     * 
     * Aralarıdanki yapısal farklılıklar
     * ---------------------------------
     * 
     * abstract   :
     * 1. Soyut metodlar içerebilir.
     * 2. Normal metodlar içerebilir.
     * 3. Özellikler içerebilir.
     * 4. Sabitler içerebilir.
     * 5. public, private veya protected tanımlanabilir.
     * 6. Herhangi bir sınıf sadece tek bir sınıftan türeyebilir.
     * 
     * interface  :
     * 1. Soyut metodlar içerebilir.
     * 2. public görünürlüğüne sahip olmak kaydıyla normal metodlar içerebilir.
     * 3. Sadece sabitleri içerebilir.
     * 4. Herhangi bir sınıfta birden fazla interface (arayüz) kullanılabilir.
     */

     // Class içerisinde abstract metod oluşturulacaksa class da abstract olmalı.
    abstract class Deneme
    {

        public $isimBir         = "Selim";
        public const SOYISIMBIR = "Tekin";

        private $isimIki         = "Selim";
        private const SOYISIMIKI = "Tekin";

        protected $isimUc         = "Selim";
        protected const SOYISIMUC = "Tekin";

        // Soyut sınıf içerisinde bulunan metodlar kesinlikle soyut sınıftan türeyen alt sınıflarda bulunmalıdır.
        abstract public function Tanim($param);
    }

    class TestBir extends Deneme
    {
        // Deneme sınıfındaki abstract metod olan Tanim metodunu bu sınıfta yazmazsak hata verir. Kullanmak zorundayız abstract metodları.
        // Parametreler olmak zorunda ama parametre isimleri farklı olabilir.
        public function Tanim($xxx)
        {
        }
    }
    
    class TestIki extends Deneme
    {
        // Deneme sınıfındaki abstract metod olan Tanim metodunu bu sınıfta yazmazsak hata verir. Kullanmak zorundayız abstract metodları.
        // Parametreler olmak zorunda ama parametre isimleri farklı olabilir.
        public function Tanim($aaa)
        {
        }
    }
    ?>
</body>

</html>