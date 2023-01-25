<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Verisini Görme</title>
</head>
<body>
    <?php
    
        $isim = $_COOKIE["kullaniciAdi"];
        $soyisim = $_COOKIE["kullaniciSoyadi"];

        echo "Merhaba " . $isim . " " . $soyisim . " nasılsın?<br/><br/>";
    
    ?>

    <a href="formdanGelenVerilerleCookieTanimlama.php">Form'a Geri Dön</a>
</body>
</html>