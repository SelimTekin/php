<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aynı Sayfada Birden Fazla Form</title>
</head>
<body>

    <!-- Birden fazla form varsa formlara isim veriyoruz. Vermezsek bazı suncular veya hostinglerde sadece son formu dikkate alacağı için sorun çıkabilir. -->
    <!-- Ayrıca formların method'ları farklı olabilir. Yani biri get iken diğeri post olabilir. -->
    <form name="birinciForm" action="sonucFormlar1.php" method="get">
        Ad Soyad : <input type="text" name="adSoyad"><br/>
        Telefon : <input type="text" name="telefon"><br/>
        E-mail : <input type="email" name="email"><br/>
        Mesajınız : <textarea name="mesaj" id="mesaj" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="1. Formu Gönder">
    </form>
    <br><br><br>
    <form name="ikinciForm" action="sonucFormlar2.php" method="get">
        Ad Soyad : <input type="text" name="adSoyad"><br/>
        Telefon : <input type="text" name="telefon"><br/>
        E-mail : <input type="email" name="email"><br/>
        Mesajınız : <textarea name="mesaj" id="mesaj" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="2. Formu Gönder">
    </form>
</body>
</html>