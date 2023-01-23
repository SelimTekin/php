<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sayfası</title>
</head>
<body>
    <form action="sonucGet.php" method="get">
        Adınız Soyadınız : <input type="text" name="adSoyad"><br/>
        E-Mail Adresiniz : <input type="email" name="email"><br/>
        Telefonunuz : <input type="text" name="telefon"><br/>
        Cinsiyetiniz : <input type="radio" name="cinsiyet" value="erkek"> Erkek <input type="radio" value="kadin"> Kadın<br/><!--seçilmezse parametre olarak gitmez hedef sayfaya-->
        Yaşınız : <select name="yas" id="yas">
            <option value=""></option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
        </select><br/>
        <input type="submit" value="Gönder">
    </form>
</body>
</html>