<?php
require_once("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Aracılığı İle Gelen Verilerden Session Tanımlama</title>
</head>
<body>
    <form action="sonuc2.php" method="post">
        Kullanıcı Adı : <input type="text" name="ad"><br/>
        Kullanıcı Şifresi : <input type="password" name="sifre"><br/>
        <input type="submit" value="Giriş Yap">
    </form>
</body>
</html>