<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişkenlerde Referansa Bağlı Değer Atama</title>
</head>
<body>
    
    <?php
    
        $degerBir = "Selim";
        $degerIki = &$degerBir; // Başına & işareti koyunca referansa bakılır. Mesela aşağıda $degerBir adında bir değişken daha tanımlanmış. Normalde aşağıda kaldığı için algılanmaz ama referans olarak verdiğimiz zaman aşağıdaki geçerli olur artık.

        echo $degerBir;
        echo "<br/>";
        echo $degerIki;
        echo "<br/><br/>";

        $degerBir = "Tekin";

        echo $degerBir;
        echo "<br/>";
        echo $degerIki;
        echo "<br/>";

    ?>

</body>
</html>