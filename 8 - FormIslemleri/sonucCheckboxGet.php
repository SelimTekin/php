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
    
        $gelenAdSoyad = $_GET["adSoyad"];
        $gelenHobiler = $_GET["hobiler"];


        echo "Adınız Soyadınız : " . $gelenAdSoyad . "<br/>";
        echo "Hobileriniz :<br/>";

        print_r($gelenHobiler);
    
    ?>
</body>
</html>