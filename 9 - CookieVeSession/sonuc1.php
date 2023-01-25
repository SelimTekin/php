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
    
        $gelenAd     = $_POST["ad"];
        $gelenSoyad  = $_POST["soyad"];
        $yasamSuresi = time() + ((60 * 60) * 24); // Bir gün yaşam süresi

        setcookie("kullaniciAdi", $gelenAd, $yasamSuresi);
        setcookie("kullaniciSoyadi", $gelenSoyad, $yasamSuresi);
    
    ?>

    <a href="kim.php">Mesajı Göster</a>
</body>
</html>