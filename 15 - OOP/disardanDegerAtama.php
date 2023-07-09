<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attribute'e Class Dışından Değer Atama</title>
</head>
<body>
    <?php
        class Deneme{
            
            // const'un değeri zaten değiştirilemez. private ve protected'a da dışarıdan erişemeyiz.
            public $isim    = "Selim";
            public $soyisim = "";
            public $sehir;

            // private ve protected'a dışarıdan ulaşılamaz. Hata verir.
            public function Yaz($ad = "Enes", $soyad = "Dönmez"){
                $metin = "<br />Merhaba " . $ad . " " . $soyad . " Nasılsın ?";
                return $metin;
            }

        }

        $islem = new Deneme;

        $islem->isim    = "Enes";
        $islem->soyisim = "Dönmez";
        $islem->sehir   = "İstanbul";

        echo $islem->isim . " " . $islem->soyisim . " " . $islem->sehir;

        $sonuc = $islem->Yaz("Selim", "Tekin");
        echo $sonuc;
    ?>
</body>
</html>