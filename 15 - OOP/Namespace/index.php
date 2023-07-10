<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace</title>
</head>
<body>
    <?php

    // namespace : Sınıflar için özel isim alanları / kümeleri tanımlamak için kullanılır.
    
    require_once("Siniflar/seliminSiniflari.php");
    require_once("Siniflar/tekininSiniflari.php");

    // Uzun namespace'lere kısa takma adlar vermek için as kullandık.
    use \Uyeler\Selim\Islemler\Kaydet\Deneme as ST;
    use \Uyeler\Tekin\Islemler\Kaydet\Deneme as FB;

    $bir = new ST;
    echo $bir->harf . "<br />";

    $iki = new \Odemeler\Selim\Test;
    echo $iki->rakam . "<br /><br />";

    $uc = new FB;
    echo $uc->harf . "<br />";

    $dort = new \Odemeler\Tekin\Test;
    echo $dort->rakam . "<br />";
    ?>
</body>
</html>