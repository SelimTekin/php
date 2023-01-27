<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>str_rot13()</title>
</head>
<body>
    <?php

        /**
         * str_rot13() : elirtilecek olan içeriğin ROT13 kodlaması hesaplayıp bularak, bulduğu değeri geriye döndürür.
         * Ayrıca ROT13 kodlaması kullanılarak kodlanmış olan içeriği geri çözerek, çözdüğü değeri geriye döndürür.
         */
    
        $deger   = "Selim Tekin & PHP & 2023";
        echo $deger . "<br />";         // Orijinal değeri yazdırdık

        $olustur = str_rot13($deger);   // şifreledik (Rakamları dönüşüm uygulamadı yani şifrelemedi. Numeric(sayısal) değerler aynı kalır.)
        echo $olustur . "<br />";

        $geriCoz = str_rot13($olustur); // Geri çözdük
        echo $geriCoz;
    
    ?>
</body>
</html>