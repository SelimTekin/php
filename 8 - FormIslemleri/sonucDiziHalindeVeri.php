<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Alınan Sayfa</title>
</head>
<body>
<?php
    
    $gelenAdSoyad = $_POST["adSoyad"];
    $gelenTelefon = $_POST["telefon"];
    $gelenEmail   = $_POST["email"];
    $gelenMesaj   = $_POST["mesaj"];
    $gelenResim   = $_FILES["dosya"];

    echo "Ad Soyad : " . $gelenAdSoyad . "<br/>";
    echo "Telefon : " . $gelenTelefon . "<br/>";
    echo "E-mail : " . $gelenEmail . "<br/>";
    echo "Mesaj : " . $gelenMesaj . "<br/><br/><br/>";

    $gelenTumDegerler = $_POST;  // Bu şekilde yaparsak formdan gelen verileri dizi halinde alır. Ama file inputunu almaz. Çünkü o $_FILES super globaliyle alınıyor. Dosya zaten dizi halinde geliyor.

    echo "<pre>";
    print_r($gelenTumDegerler);
    echo "</pre>";

    foreach($gelenTumDegerler as $anahtar => $deger){
        echo $anahtar . " = " . $deger . "<br/>";
    }

    echo "<br/><br/><br/>";

    foreach($gelenResim as $resimAnahtar => $resimDeger){
        echo $resimAnahtar . " = " . $resimDeger . "<br/>";
    }

?>
</body>
</html>