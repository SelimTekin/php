<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişken Kullanarak Dizi Oluşturma</title>
</head>
<body>
    <?php
    
        // Bu bir diziyi oluşturur. Tıpkı şunun gibi ["Selim", "Tekin", "PHP"] ya da array'li hali
        // $isimler[] = "Selim";   // 0. eleman
        // $isimler[] = "Tekin";   // 1. eleman
        // $isimler[] = "PHP";     // 2. eleman

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre>";

        // echo $isimler[0] . "<br/>";
        // echo $isimler[1] . "<br/>";
        // echo $isimler[2];


        $isimler["Ad"] = "Selim";
        $isimler["Soyad"] = "Tekin";
        $isimler["Egitim"] = "PHP";
        
        echo "<pre>";
        print_r($isimler);
        echo "</pre>";

        echo $isimler["Ad"] . "<br/>";
        echo $isimler["Soyad"] . "<br/>";
        echo $isimler["Egitim"];
    
    ?>
</body>
</html>