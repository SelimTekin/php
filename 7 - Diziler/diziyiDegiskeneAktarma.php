<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diziyi Değişkene Aktarma</title>
</head>
<body>
    <?php
    
        $isimler = array("Ad" => "Selim", "Tekin", "Egitim" => "PHP"); // Bu dizinin değişmesini istemiyorsak aşağıdaki gibi yapabiliriz.

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";

        $degerler   = $isimler;
        $degerler["Renk"] = "Mavi";
        $degerler[] = "Araba";   // anahtar [1] olur. isimler dizisinde "Tekin" değerinin anahtarı [0] olmuştu çünkü.

        echo "<pre>";
        print_r($degerler);
        echo "</pre>";
    
    ?>
</body>
</html>