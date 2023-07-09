<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <?php
        class IsimSoyisim{

            // ATTRIBUTES (ÖZELLİKLER)
            public $isim = "Selim";
            public const SOYISIM = "Tekin";

            // METHOD
            public function isimSoyisim(){
                $sonuc = "Selim Tekin";
                return $sonuc;
            }
        }
        
        $sonuc = new IsimSoyisim;

        // echo $sonuc->isim . "<br />"; // değişken çağırırken oluşturduğumuz nesneyi kullanıyoruz ve $dolar kullanmıyoruz.
        // echo IsimSoyisim::SOYISIM; // sabit çağırırken direkt class ismini kullanıyoruz ve :: kullanıyoruz.

        // $metin = $sonuc->isimSoyisim(); // function çağırma
        // echo $metin;
    ?>
</body>
</html>