<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interface</title>
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


     // Sadece const kullanılır.
    interface CRUD // CRUD -> C : Create, R : Read, U : Update, D : Delete
    {

        // Hata verir. Çünkü interface içerisinde attribute kullanılamaz. Yalnızca sabit kullanılabilir.
        // public $isimBir         = "Selim";
        // public const SOYISIMBIR = "Tekin";

        // private $isimIki         = "Selim";
        // private const SOYISIMIKI = "Tekin";

        // protected $isimUc         = "Selim";
        // protected const SOYISIMUC = "Tekin";

        public const ISIM    = "Selim";

        // Soyut arayüz sınıfı içerisinde bulunan metodlar kesinlikle soyut arayüz sınıfı tanımlanan sınıflarda da bulunmalıdır.
        // private veya protected olamaz public olmak zorunda.
        public function create($tablo, $id);
        public function select($tablo, $id);
        public function update($tablo, $id);
        public function delete($tablo, $id);
    }

    class TestBir implements CRUD
    {
        // Parametreler olmak zorunda ama parametre isimleri farklı olabilir.
        public function create($tablo, $id){

        }
        public function select($tablo, $id){

        }
        public function update($tablo, $id){

        }
        public function delete($tablo, $id){

        }
    }
    
    class TestIki implements CRUD
    {
        // Deneme sınıfındaki abstract metod olan Tanim metodunu bu sınıfta yazmazsak hata verir. Kullanmak zorundayız abstract metodları.
        // Parametreler olmak zorunda ama parametre isimleri farklı olabilir.
        public function create($tablo, $id){

        }
        public function select($tablo, $id){

        }
        public function update($tablo, $id){

        }
        public function delete($tablo, $id){

        }
    }
    ?>
</body>

</html>