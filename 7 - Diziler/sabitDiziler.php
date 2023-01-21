<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabit Diziler</title>
</head>
<body>
    <?php
    
        
        // define("DEGERLER", array("Selim", "Tekin")); // sabit dizilerin de içeriği değiştirilmez.
        // define("DEGERLER", ["Selim", "Tekin"]);

        // const DEGERLER = array("Selim", "Tekin");       // const ile kullanımı

        // echo "<pre>";
        // print_r(DEGERLER);
        // echo "</pre>";

        // echo DEGERLER[0] . "<br/>";
        // echo DEGERLER[1] . "<br/>";


        define("DEGERLER", array("Ad" => "Selim", "Tekin", "Eğitim" => "PHP")); // const'ta da olur.

        echo "<pre>";
        print_r(DEGERLER);
        echo "</pre>";

        echo DEGERLER["Ad"] . "<br/>";      // [0] yazarsak olmaz.
        echo DEGERLER[0] . "<br/>";   // [1] yazarsak olmaz.
        echo DEGERLER["Eğitim"] . "<br/>";
    ?>
</body>
</html>