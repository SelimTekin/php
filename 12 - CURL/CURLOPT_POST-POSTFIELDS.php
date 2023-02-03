<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_POST ve CURLOPT_POSTFIELDS</title>
</head>
<body>
    <?php
    
        /**
         * CURLOPT_POST       : Başlatılmış olan bir curl oturumunda istenilen URL adresine HTTP POST işlemi tanımlamak için kullanılır.
         * CURLOPT_POSTFIELDS : Başlatılmış olan bir curl oturumunda istenilen URL adresine HTTP POST işleminde gönderilecek olan veri / verileri tanımlamak için kullanılır.
         */


        // Herhangi bir uzak sunucudaki yani herhangi bir URL'deki çeşitli formların sonuc sayfalarına formadan gidermiş gibi veri göndermek istiyorsak
        // CURLOPT_POST => true diyerek POST işlemlerini başlatıyoruz. Sonra da CURLOPT_POSTFIELDS diyerek POST parametrelerini ve değerlerini CURL ile gönderebiliyoruz.

        $oturum = curl_init();
        curl_setopt_array($oturum, [
            CURLOPT_URL => "http://localhost/Php/12%20-%20CURL/CURLOPT_POST-POSTFIELDS_veriler.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,    // POST işlemini tanımladık.
            CURLOPT_POSTFIELDS => [  // form olmadan da curl ile post aracılığıyla veri gönderebiliriz.
                "adSoyad" => "Selim Tekin",
                "email" => "selim@mail.com",
                "telefon" => "5615131",
                "cinsiyet" => "erkek",
                "yas" => 20,
            ]
        ]);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        echo $sonuc;
    
    ?>
</body>
</html>