<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_FILE</title>
</head>
<body>
    <?php
    
        /**
         * CURLOPT_FILE : Başlatılmış olan bir CURL oturumunda istenilen URL adresinden elde edilen içeriğin aktarılacağı dosyayı tanımlamak için kullanılır.
         */
    
        // Bu sadece dosya değil de resim pdf felan da olabilir.
        // deneme.html adında bir dosya oluşturur (zaten varsa üstüne yazar) ve içine yazar.
        // $dosya  = fopen("deneme.html", "w");
        $resim  = fopen("resim.jpg", "w");
        $oturum = curl_init();
        // curl_setopt($oturum, CURLOPT_URL, "https://www.sahibinden.com/");
        curl_setopt($oturum, CURLOPT_URL, "https://i.fanatik.com.tr/i/fanatik/75/0x410/6376f0fa45d2a008c88a6ceb.jpg"); // Resim için
        curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturum, CURLOPT_FILE, $resim);  // Dosya, başarılı bir şekilde indirilmişse 1 sonucu döner.
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        // echo $sonuc;

        if($sonuc == 1){
            echo "Dosya başarıyla indirildi.";
        }
        else{
            echo "Dosya indirme işlemi sırasında beklenmeyen bir hata oluştu.";
        }
    ?>
</body>
</html>