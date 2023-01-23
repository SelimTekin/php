<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sonucDiziHalindeVeri.php" method="post" enctype="multipart/form-data">
        Resim : <input type="file" name="dosya"><br/>
        Ad Soyad : <input type="text" name="adSoyad"><br/>
        Telefon : <input type="text" name="telefon"><br/>
        E-mail : <input type="email" name="email"><br/>
        Mesajınız : <textarea name="mesaj" id="mesaj" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="Bilgileri Gönder">
    </form>
</body>
</html>