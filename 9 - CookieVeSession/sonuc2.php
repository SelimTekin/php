<?php
require_once("ayar.php");
?>
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
    
        $gelenAd = $_POST["ad"];
        $gelenSifre = $_POST["sifre"];

        if(($gelenAd!="") and ($gelenSifre!="")){
            $_SESSION["ad"]    = $gelenAd;
            $_SESSION["sifre"] = $gelenSifre;

            echo "Merhaba " . $gelenAd . ", siteye giriş yaptınız.<br/>";
            echo "<a href='cikis.php'>Çıkış Yap</a>";
        }
        else{
            echo "Lütfen formda boş alan bırakmayınız.";
            echo "<a href='formdanGelenVerilerleSessionTanimlama.php'>Forma Dön</a>";
        }
    
    ?>
</body>
</html>