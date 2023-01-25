<?php
session_start(); // session_start() nuhakkak sayfanın en üstünde olmalı.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessionları Göster</title>
</head>
<body>
    <?php
    
    echo $_SESSION["kullaniciAdi"] . "<br/>";
    echo $_SESSION["kullaniciSoyadi"] . "<br/>";
    
    ?>

    <a href="sessionSil.php">Soyad Session'ını Sil</a>
</body>
</html>