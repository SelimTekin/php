<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl_getinfo() ve curl_error()</title>
</head>
<body>
    <?php
    
        /**
         * curl_getinfo() : Kendisine parametre olarak verilen değer doğrultusunda başlatılmış olan bir CURL oturumunun tüm bağlantı bilgilerini
         */


        // $ch       = curl_init("https://www.turkcell.com.tr/");
        // curl_exec($ch);
        // $bilgiler = curl_getinfo($ch);
        // // echo "<pre>";
        // // print_r($bilgiler);
        // // echo "</pre>";
        // curl_close($ch);
    
        // echo "<pre>";
        // print_r($bilgiler); // curl_close'tan sonra da yazdırılabilir çünkü artık bilgileri aldık. Yani $bilgiler değişkenine depoladık.
        // echo "</pre>";



        // ERROR


        $ch   = curl_init("https://www.extraegitimdeneme.com.tr/");
        curl_exec($ch);
        $hata = curl_error($ch); // curl_close'tan sonra da yazdırılabilir çünkü artık bilgileri aldık.
        echo $hata;              // Çıktı : Could not resolve host: www.extraegitimdeneme.com.tr
        curl_close($ch);

    ?>
</body>
</html>