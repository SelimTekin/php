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
    
        $gelenAdSoyad = $_GET["adSoyad"];
        $gelenTelefon = $_GET["telefon"];
        $gelenEmail = $_GET["email"];
        $gelenMesaj = $_GET["mesaj"];

        echo "Ad Soyad : " . $gelenAdSoyad . "<br/>";
        echo "Telefon : " . $gelenTelefon . "<br/>";
        echo "E-mail : " . $gelenEmail . "<br/>";
        echo "Mesaj : " . $gelenMesaj . "<br/>";
    
    ?>
</body>
</html>