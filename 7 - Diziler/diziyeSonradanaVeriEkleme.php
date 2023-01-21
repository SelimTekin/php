<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziye Sonradan Veri Ekleme</title>
</head>
<body>
    <?php
    
        // $degerler   = array();
        $degerler   = array("deneme" => "deneme1", "deneme2", "deneme3");  // Bu şekilde içinde veri olduğu zaman da sonradan ekleme yapılabilir.

        $degerler["deneme"] = "deneme";
        $degerler[] = "Tekin";
        $degerler["Egitim"] = "PHP";

        echo "<pre>";
        print_r($degerler);
        echo "</pre>";

        // echo $degerler[0] . "<br/>";
        // echo $degerler[1] . "<br/>";
        // echo $degerler["Egitim"];
    
    ?>
</body>
</html>