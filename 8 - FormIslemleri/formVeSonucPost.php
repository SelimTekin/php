<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form ve Sonuç Aynı Sayfada</title>
</head>
<body>

    <?php
    if(!$_POST){ // Herhangi bir POST isteği yoksa formu göster
    ?>

    <form action="formVeSonucPOST.php" method="post">
        Ad Soyad : <input type="text" name="adSoyad"><br/>
        Telefon : <input type="text" name="telefon"><br/>
        E-mail : <input type="email" name="email"><br/>
        Mesajınız : <textarea name="mesaj" id="mesaj" cols="30" rows="10"></textarea><br/>
        <input type="submit" value="Gönder">
    </form>
    <?php
    }else{

        $gelenAdSoyad = $_POST["adSoyad"];
        $gelenTelefon = $_POST["telefon"];
        $gelenEmail = $_POST["email"];
        $gelenMesaj = $_POST["mesaj"];

        echo "Ad Soyad : " . $gelenAdSoyad . "<br/>";
        echo "Telefon : " . $gelenTelefon . "<br/>";
        echo "E-mail : " . $gelenEmail . "<br/>";
        echo "Mesaj : " . $gelenMesaj . "<br/>";

    }
    ?>
</body>
</html>