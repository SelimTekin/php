<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_USERAGENT ve CURLOPT_REFERER</title>
</head>
<body>
    <?php

        /**
         * CURLOPT_USERAGENT : Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan web browser'ının (tarayıcısının)
         * tanımlanmasını ve ilgili browser'dan erişim sağlandığını belirtmek için kullanılır. Yani bir tarayıcıdan gelmiyorsak bir bot olabiliriz.
         * 
         * CURLOPT_REFERER   : Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP isteğinde kullanılacak olan referans / gönderen site URL adresini
         * belirtmek için kullanılır.
         */


    
        // // Masaüstündeki bir tarayıcıdan giriş
        // $oturum = curl_init();
        // curl_setopt_array($oturum, [
        //     CURLOPT_URL => "http://localhost/Php/12%20-%20CURL/CURLOPT_USERAGENT-REFERER_tarayici.php",
        //     CURLOPT_RETURNTRANSFER => true,
        //     // CURLOPT_USEAGENT tarayıcı hangi tarayıcı olduğunu gösterir. Dolayısıyla burada sanki bir bot gibi değil de tarayıcıdan gönderiyormuşuz gibi yaptık.
        //     CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1"
        // ]);
        // $sonuc = curl_exec($oturum);
        // curl_close($oturum);
        // echo $sonuc;


        // // Mobil bir tarayıcıdan giriş
        // $oturum = curl_init();
        // curl_setopt_array($oturum, [
        //     CURLOPT_URL => "https://www.sahibinden.com/",
        //     CURLOPT_RETURNTRANSFER => true,
        //     // CURLOPT_USEAGENT tarayıcı hangi tarayıcı olduğunu gösterir.
        //     //Dolayısıyla burada sanki bir bot gibi değil de MOBİL bir tarayıcıdan gönderiyormuşuz gibi yaptık.
        //     // Yani burada sanki IPhone olan bir mobil cihazdaki gibi tasarım görünür.
        //     CURLOPT_USERAGENT => "Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148"
        // ]);
        // $sonuc = curl_exec($oturum);
        // curl_close($oturum);
        // echo $sonuc;


        // Referans gönderme
        $oturum = curl_init();
        curl_setopt_array($oturum, [
            CURLOPT_URL => "http://localhost/Php/12%20-%20CURL/CURLOPT_USERAGENT-REFERER_referans.php", // curl ile bu sayfaya iletiyoruz.
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_REFERER hangi adresten geldiğimizi gösterir. https://www.extraegitim.com bu adresten gelmiş gibi gösterdik kendimizi.
            CURLOPT_REFERER => "https://www.extraegitim.com"
        ]);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        echo $sonuc;
    
    ?>
</body>
</html>