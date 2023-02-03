<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLFile()</title>
</head>
<body>
    <?php
    
        /**
         * CURLFile() : Başlatılmış olan bir CURL oturumunda istenilen URL adresine HTTP POST işlemi tanımladıktan sonra, CURLOPT_POSTFIELDS
         * dahilinde karşı server'a dosya yüklemek için kullanılır.
         */


        // Olası bir hataya karşı dosya türünü belirtiyoruz. Bazen stream gibi bir şey ooabiliyor çünkü türü.
        // sonuc sayfasında png olarak gitmesi isteniyorsa dosya jpg dahi olsa bunu bu sayede png olarak gönderebiliriz.
        // sonuc sayfasında jpg olarak görünecek yine fakat type'ı image/png olacak. Yani bir nevi kandırıyormuşuz gibi düşünebiliriz :) .
        $Resim = new CURLFile(__DIR__ . "/Yuklenecekler/dog.jpg", "image/png");
        $oturum = curl_init();
        curl_setopt($oturum, CURLOPT_URL, "http://localhost/Php/12%20-%20CURL/CURLFile_sonuc.php");
        curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturum, CURLOPT_POST, true);
        curl_setopt($oturum, CURLOPT_POSTFIELDS, [
            "Dosya" => $Resim
        ]);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        echo $sonuc;
    
    ?>
</body>
</html>