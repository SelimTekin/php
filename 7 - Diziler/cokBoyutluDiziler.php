<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çok Boyutlu Diziler</title>
</head>
<body>
    <?php
    
        // $degerler = array("Ad" => "Selim", "Tekin", "DiziA" => array("Mavi", "Renk" => "Kırmızı", "Sarı", "Siyah", "DiziB" => array("Masa", "EsyaBir" => "Sandalye")), "Onur", "Serkan");

        // echo "<pre>";
        // print_r($degerler);
        // echo "</pre>";

        // echo $degerler["Ad"] . "<br/>";
        // echo $degerler[0] . "<br/>";
        // echo $degerler["DiziA"][0] . "<br/>";
        // echo $degerler["DiziA"]["Renk"] . "<br/>";
        // echo $degerler["DiziA"][1] . "<br/>";
        // echo $degerler["DiziA"][2] . "<br/>";
        // echo $degerler["DiziA"]["DiziB"][0] . "<br/>";
        // echo $degerler["DiziA"]["DiziB"]["EsyaBir"] . "<br/>";
        // echo $degerler[1] . "<br/>";
        // echo $degerler[2] . "<br/>";


        define("DEGERLER", array("Selim", "Tekin", array("Mavi", "Kırmızı", "Sarı", "Siyah"), "Onur", "Serkan"));

        echo "<pre>";
        print_r(DEGERLER);
        echo "</pre>";

        echo DEGERLER[0] . "<br/>";
        echo DEGERLER[1] . "<br/>";
        print_r(DEGERLER[2]);
        echo "<br/>" . DEGERLER[3] . "<br/>";
        echo DEGERLER[4] . "<br/>";
    
    ?>
</body>
</html>