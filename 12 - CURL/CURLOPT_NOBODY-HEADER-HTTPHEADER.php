<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_NOBODY, CURLOPT_HEADER ve CURLOPT_HTTPHEADER</title>
</head>
<body>
    <?php
    
        /**
         * CURLOPT_NOBODY : Başlatılımş olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin body (gövde) alanının veya
         * çıktılanmasını durdurmak için kullanılır.
         * 
         * CURLOPT_HEADER : Başlatılımş olan bir CURL oturumunda istenilen URL adresinden elde edilen içerik ile birlikte HTTP üst bilgisinin de
         * bulunması / alınması gerektiğini belirtmek için kullanılır.
         * 
         * CURLOPT_HTTPHEADER : Başlatılımş olan bir CURL oturumunda istenilen URL adresine HTTP üst bilgisi göndermek / tanımlamak için kullanılır.
         */
    

        $oturum = curl_init();
        curl_setopt_array($oturum, [
            // CURLOPT_URL => "http://www.google.com.tr",
            CURLOPT_URL => "http://localhost/Php/12%20-%20CURL/HTTPHEADER_ornek.php",
            CURLOPT_RETURNTRANSFER => true,
            // CURLOPT_NOBODY => true,  // Sayfanın gövdesinin gözükmesini engeller. Sadece header'ını alacaksak body'ye ihtiyacımız yok.
            // CURLOPT_HEADER => true,  // Sayfanın sadece header kısmındaki bilgelirini almamızı sağlar.
            CURLOPT_HTTPHEADER => [     // HTTPHEADER_ornek sayfasına header gönderdik
                "GuvenlikKodu : 123456789ABCDEFG",
                "Token : lkdnfhjhkal",
                "SiteKeys : 98273tiuesfhsoi"
            ]
        ]);
        $sonuc  = curl_exec($oturum);
        curl_close($oturum);
        echo nl2br($sonuc); // \n 'leri <br />'ye çevirir. Daha okunaklı bir hale gelir.

        // Dizi şeklinde de yazdırabiliriz.
        // $parcala = explode("\n", $sonuc); // \n'lerden parçalayarak diziye dönüştürdü.

        // echo "<pre>";
        // print_r($parcala);
        // echo "</pre>";

        // Diziyi döngüyle de yazdırabiliriz.
        // foreach($parcala as $deger){
        //     echo $deger . "<br />";
        // }

    ?>
</body>
</html>