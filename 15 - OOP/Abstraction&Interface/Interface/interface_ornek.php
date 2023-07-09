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

    interface Create
    {
        public function Create($tablo, $id);
    }

    interface Select
    {
        public function Select($tablo, $id);
    }

    interface Update
    {
        public function Update($tablo, $id);
    }
    
    interface Delete
    {
        public function Delete($tablo, $id);
    }

    class TestBir implements Create, Select, Update, Delete
    {
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