<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Alınan Sayfa</title>
</head>
<body>
    <?php
    
        $gelenAdSoyadDegeri = $_REQUEST["adSoyad"];
        $gelenEmailAdresiDegeri = $_REQUEST["email"];
        $gelenTelefonDegeri = $_REQUEST["telefon"];
        $gelenCinsiyetDegeri = $_REQUEST["cinsiyet"];
        $gelenYasDegeri = $_REQUEST["yas"];

        echo "Adınız Soyadınız : " . $gelenAdSoyadDegeri . "<br/>";
        echo "Email Adresiniz : " . $gelenEmailAdresiDegeri . "<br/>";
        echo "Telefonunuz : " . $gelenTelefonDegeri . "<br/>";
        echo "Cinsiyetiniz : " . $gelenCinsiyetDegeri . "<br/>";
        echo "Yaşınız : " . $gelenYasDegeri . "<br/>";
    
    ?>
</body>
</html>