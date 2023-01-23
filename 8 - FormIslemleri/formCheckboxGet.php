<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verileri Dizi Halinde Gönderme ve Alma</title>
</head>
<body>
    <form action="sonucCheckboxGet.php" method="get">
        Adınız Soyadınız : <input type="text" name="adSoyad">
        Hobileriniz : 
        <input type="checkbox" name="hobiler[]" value="alisveris"> Alışveriş <!-- hobiler[] yaparak dizi halinde gönderdik. Aynı name değerini ait verilerin dizi olarak gönderilmesini sağlar -->
        <input type="checkbox" name="hobiler[]" value="seyahat"> Seyahat
        <input type="checkbox" name="hobiler[]" value="sinema"> Sinema
        <input type="checkbox" name="hobiler[]" value="tiyatro"> Tiyatro
        <input type="checkbox" name="hobiler[]" value="yemek"> Yemek

        <input type="submit" value="Formu Gönder">
    </form>
</body>
</html>