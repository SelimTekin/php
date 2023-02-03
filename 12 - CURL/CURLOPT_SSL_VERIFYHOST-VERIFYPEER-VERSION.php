<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_SSL_VERIFYHOST, CURLOPT_SSL_VERIFYPEER ve CURLOPT_SSLVERSION</title>
</head>
<body>
    <?php
    
     /**
      * CURLOPT_SSL_VERIFYHOST : Başlatılmış olan bir curl oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasını tanımlamak için kullanılır.
      *                      0 : Ortak bir isim özelliği değeri aranmaz.
      *                      1 : SSL eş sertifikasında ortak bir ismin varlığına bakılır.
      *                      2 : SSL eş sertifikasında ortak bir ismin varlığı ile birlikte server'ın ana bilgisayar adının da eşleşmesine bakılır.
      * CURLOPT_SSL_VERIFYPEER : Başlatılmış olan bir curl oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasını doğrulamak veya doğrulamayı iptal etmek için kullanılır.
      * CURLOPT_SSLVERSION     : Başlatılmış olan bir curl oturumunda istenilen URL ile veri alışverişi sırasında SSL eş sertifikasının sürümünü belirtmek için kullanılır.
      *                      0 : Default
      *                      1 : TLSv1
      *                      2 : SSLv2
      *                      3 : SSLv3
      *                      4 : TLSv1_0
      *                      5 : TLSv1_1
      *                      6 : TLSv1_2
      */
    

    $oturum = curl_init();
    curl_setopt($oturum, CURLOPT_URL, "https://www.turkcell.com.tr");
    curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($oturum, CURLOPT_SSL_VERIFYHOST, 1);
    curl_setopt($oturum, CURLOPT_SSLVERSION, 2);
    curl_setopt($oturum, CURLOPT_SSL_VERIFYPEER, 0);
    $sonuc = curl_exec($oturum);
    curl_close($oturum);
    echo $sonuc;
    ?>
</body>
</html>