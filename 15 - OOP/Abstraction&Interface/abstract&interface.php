<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abstract ve interface birlikte</title>
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

     abstract class Tema{
        abstract public function headerAlani($arkaPlanRengi, $headerLogosu, $headerBanneri);
        abstract public function bodyAlani($icerik);
        abstract public function footerAlani($copyMetni);
    }

    interface CRUD
    {
        public function create($tablo, $id);
        public function select($tablo, $id);
        public function update($tablo, $id);
        public function delete($tablo, $id);
    }


    class UstAlan extends Tema implements CRUD
    {
        public function create($tablo, $id){

        }
        public function select($tablo, $id){

        }
        public function update($tablo, $id){

        }
        public function delete($tablo, $id){

        }

        public function headerAlani($arkaPlanRengi, $headerLogosu, $headerBanneri){

        }

        public function bodyAlani($icerik){

        }

        public function footerAlani($copyMetni){

        }

    }

    ?>
</body>

</html>