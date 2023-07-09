<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__construct() Parametre Gönderme</title>
</head>
<body>
    <?php
        class Deneme{

            // Parametrelere bu şekilde varsayılan değer verebiliriz.
            public function __construct($hostBilgisi="8.8.5.7", $kullaniciAdi="Selim-Tekin", $kullaniciSifre="sifre123", $veritabaniAdi="eTicaret")
            {
                $metin = "Gelen Host Bilgisi : " . $hostBilgisi . "<br />Gelen Veritabanı Kullanıcı Adı : " . $kullaniciAdi . "<br />Gelen Veritabanı Kullanıcı Şifresi : " . $kullaniciSifre . "<br />Gelen Veritabanı Adı : " . $veritabaniAdi;

                echo $metin;
            }
        }

        $islem = new Deneme("78.9.6.2", "Selim", "123456", "dbName");
    ?>
</body>
</html>