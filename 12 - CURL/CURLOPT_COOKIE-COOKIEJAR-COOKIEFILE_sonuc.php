<?php
session_start();

$gelenKullaniciAdi = $_POST["kullaniciAdi"];
$gelenSifre = $_POST["sifre"];

if(($gelenKullaniciAdi != "") and ($gelenSifre != "")){
    if(($gelenKullaniciAdi == "Selim") and ($gelenSifre == "123")){
        $_SESSION["kullanici"] = "Selim";
        header("Location: kontrolBirinciSayfa.php");
        exit();
    }
    else{
        header("Location: CURLOPT_COOKIE-COOKIEJAR-COOKIEFILE.php");
        exit();
    }
}
else{
    header("Location: CURLOPT_COOKIE-COOKIEJAR-COOKIEFILE.php");
    exit();
}

?>
