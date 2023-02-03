<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    Standart Menüler :<br />
    <a href="index.php?sayfa=anasayfa">Ana Sayfa</a> |
    <a href="index.php?sayfa=urunler">Ürünler</a> |
    <a href="index.php?sayfa=hakkimizda">Hakkımızda</a> |
    <a href="index.php?sayfa=sozlesmeler">Sözleşmeler</a> |
    <a href="index.php?sayfa=iletisim">İletişim</a><br /><br />

    Manipüle Ettiğimiz Menüler :<br />
    <a href="anasayfa">Ana Sayfa</a> |
    <a href="urunler">Ürünler</a> |
    <a href="hakkimizda">Hakkımızda</a> |
    <a href="sozlesmeler">Sözleşmeler</a> |
    <a href="iletisim">İletişim</a><br />


    <?php

        if(isset($_GET["sayfa"])){
            $gelenSayfaDegeri = $_GET["sayfa"];
        }
        else{
            $gelenSayfaDegeri = "";
        }
    
        if($gelenSayfaDegeri == "anasayfa"){
            require_once("anasayfa.php"); // Daha önceden dahil edildiyse hata versin çalışmaya devam etmesin diye require_once kullanıyoruz.
        }
        elseif($gelenSayfaDegeri == "urunler"){
            require_once("urunler.php");
        }
        elseif($gelenSayfaDegeri == "hakkimizda"){
            require_once("hakkimizda.php");
        }
        elseif($gelenSayfaDegeri == "sozlesmeler"){
            require_once("sozlesmeler.php");
        }
        elseif($gelenSayfaDegeri == "iletisim"){
            require_once("iletisim.php");
        }
    
    ?>
</body>
</html>