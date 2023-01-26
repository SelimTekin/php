<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strip_tags()</title>
</head>
<body>
    <?php
    
        /**
         * strip_tags() : Belirtilecek olan içerikte bulunabilecek olan tüm HTML kodlarını temizleyerek, temizlenmiş olan değeri geriye döndürür.
         */
    
        
        $deger = "<h1>Selim Tekin</h1><div>PHP</div><a href='#'>PHP Eğitimi</a><script>alert('Hacklendin')</script>";
        echo $deger . "<br /><br />";

        // $sonuc = strip_tags($deger);            // Tüm HTML taglarını sil.
        // $sonuc = strip_tags($deger, "<h1><a>"); // h1 ve a tagları hariç diğer HTML taglarını sil.

        $sonuc = strip_tags($deger, "<br>"); // normalde orijinali <br /> şeklinde yazılır fakat nasıl <h1> bu şekilde yazılıyorsa <br> de öyle yazılmalı. Çünkü her tag'ın kapanış tagı yok.
        echo $sonuc;
    ?>
</body>
</html>