<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_COOKIE, CURLOPT_COOKIEJAR ve CURLOPT_COOKIEFILE</title>
</head>
<body>
    <?php
    
        /**
         * CURLOPT_COOKIE     : Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan yeni cookie (çerez) / cookie'ler oluşturmak için kullanılır.
         * CURLOPT_COOKIEJAR  : Başlatılmış olan bir CURL oturumu sonlandırıldığında / kapatıldığında daha önceden oluşmuş olan cooki'lerin kaydedileceği dosyayı tanımlamak için kullanılır.
         * CURLOPT_COOKIEFILE : Başlatılmış olan bir CURL oturumunda istenilen URL adresinde kullanılacak olan cookie'lerin
         * tutulduğu dosyayı belirtmek ve içeriğindeki değerleri karşı server'a iletmek için kullanılır.
         */

        
        $oturum = curl_init();
        curl_setopt_array($oturum, [
            CURLOPT_URL => "http://localhost/Php/12%20-%20CURL/CURLOPT_COOKIE-COOKIEJAR-COOKIEFILE_sonuc.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => [
                "kullaniciAdi" => "Selim",
                "sifre"        => "123"
            ],
            CURLOPT_COOKIE => "Kullanici=Selim",
            CURLOPT_COOKIEJAR => __DIR__ . "/cerez.txt"
        ]);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        echo $sonuc;


        // Bir curl başlatılıp kapandığı anda artık oradaki çerezler geçersizdir.
        $oturumIki = curl_init();
        curl_setopt($oturumIki, CURLOPT_URL, "http://localhost/Php/12%20-%20CURL/kontrolBirinciSayfa.php");
        curl_setopt($oturumIki, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturumIki, CURLOPT_COOKIEFILE, __DIR__ . "/cerez.txt"); // Oluşmuş olan çerezi sunucuya geri gönderdik.
        $sonucIki = curl_exec($oturumIki);
        curl_close($oturumIki);
        echo $sonucIki;

        $oturumUc = curl_init();
        curl_setopt($oturumUc, CURLOPT_URL, "http://localhost/Php/12%20-%20CURL/kontrolIkinciSayfa.php");
        curl_setopt($oturumUc, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturumUc, CURLOPT_COOKIEFILE, __DIR__ . "/cerez.txt"); // Oluşmuş olan çerezi sunucuya geri gönderdik.
        $sonucUc = curl_exec($oturumUc);
        curl_close($oturumUc);
        echo $sonucUc;

    ?>

</body>
</html>