<?php
session_start(); // session_start() nuhakkak sayfanın en üstünde olmalı.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessionları Silme</title>
</head>
<body>
    <?php
    
        // Bütün sessionları siler
        // session_destroy();

        // İstediğimiz bir tane session'ı siler. Fakat hem değişkeni hem dizi elemanını hem cookie'yi hem de session silebilir.
        unset($_SESSION["kullaniciSoyadi"]);
    
    ?>

    <a href="session.php">Session Oluştur</a>
</body>
</html>