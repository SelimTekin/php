<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizideki Bir Veriyi Değiştirme</title>
</head>
<body>
    <?php
    
        $degerler = array("Ad" => "Selim", "Soyad" => "Tekin", "Egitim" => "PHP", "Renk" => "Mavi");

        $degerler["Egitim"] = "Javascript";
        $degerler["Renk"] = "Siyah";

        echo "<pre>";
        print_r($degerler);
        echo "</pre>";

        echo $degerler["Ad"] . "<br/>";
        echo $degerler["Soyad"] . "<br/>";
        echo $degerler["Renk"];
    
    ?>
</body>
</html>