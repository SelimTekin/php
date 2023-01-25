<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Dizisi</title>
</head>
<body>
    <?php
    
        $yasamSuresi = time() + (60 * 5);

        // Bu şekilde cookiler dizi şeklinde tanımlanır. kullanici adinda anahtar oluşturulur ve bu anahtarın değeri olan yeni bir dizide Adi ve Soyadi adında anahtarlar barındırılır.(Değerleri 2. parametre oluyor.)
        setcookie("kullanici[Adi]", "Selim", $yasamSuresi);
        setcookie("kullanici[Soyadi]", "Tekin", $yasamSuresi);

        
        setcookie("sepet[ID]", 5, $yasamSuresi);
        setcookie("sepet[Tutari]", 1250, $yasamSuresi);

        echo "<pre>";
        // print_r($_COOKIE);
        print_r($_COOKIE["kullanici"]); // kullanici anahtarını değeri olan diziyi yazdırır.
        echo "</pre>";
    
    ?>
</body>
</html>