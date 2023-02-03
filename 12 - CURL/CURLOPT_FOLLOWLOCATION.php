<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURLOPT_FOLLOWLOCATION</title>
</head>
<body>
    <?php
    
    // $oturum = curl_init();
    // curl_setopt($oturum, CURLOPT_URL, "http://www.extraegitim.com");
    // curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($oturum, CURLOPT_FOLLOWLOCATION, true); // Yönlendirme varsa  yönlendirmeyi takip et. Yani yönlendirdiği sayfaya git.
    // $sonuc = curl_exec($oturum);
    // curl_close($oturum);
    // echo $sonuc;


    // Diziyi şeklinde de yapabiliriz

    $oturum = curl_init();
    curl_setopt_array($oturum, [
        CURLOPT_URL => "https://www.extraegitim.com", 
        CURLOPT_RETURNTRANSFER => 1, 
        CURLOPT_TIMEOUT => 90
    ]);
    $sonuc = curl_exec($oturum);
    curl_close($oturum);
    echo $sonuc;
    
    ?>
</body>
</html>