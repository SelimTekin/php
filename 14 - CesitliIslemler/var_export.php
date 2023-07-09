<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>var_export()</title>
</head>
<body>
    <?php
        /* var_export() : Belirtilecek olan herhangi bir değişkenin çözümlenebilir gösterimini bularak, bulduğu gösterimin ekran çıktılanmasını sağlamak için kullanılır. Yani mesela stringi tırnaklar arasında yazar.*/


        class Deneme {
            public $isim    = "Selim";
            public $soyisim = "Tekin";
            public $dizi    = array("Fenerbahçe", 1907);

            public function bilgiler(){
                $tarih = 2023;
                $sehir = "İstanbul";

                $dondur = $tarih . "<br />" . $sehir;
                return $dondur;
            }
        }

        $sonuc = new Deneme;

        echo $sonuc->isim . " " . $sonuc->soyisim . "<br />";
        echo $sonuc->bilgiler() . "<br /><br /><br /><br /><br />";

        var_export($sonuc);
        echo "<br />";
        var_export($sonuc->bilgiler());
        echo "<br />";
        echo "<pre>";
        var_export($sonuc->dizi);
        echo "</pre>";
    ?>
</body>
</html>