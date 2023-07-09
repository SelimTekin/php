<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getenv() & putenv()</title>
</head>
<body>
    <?php
        /* getenv() : PHP yazılımları içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkeninin değerini bularak, bulduğu değeri geriye döndürür.
           putenv() : PHP yazılımları içerisinde kullanılabilecek ve sisteme tanımlı olan bir ortam değişkenine, belirtilecek olan değeri atamak için kullanılır. */


        // echo "<pre>";
        // print_r(getenv());
        // echo "</pre>";

        echo getenv("OS");

        echo "<br /><br /><br />";

        putenv("ISIM=Selim");
        putenv("SOYISIM=Tekin");
        putenv("bilgi=php");

        // print_r(getenv()) yazarsan içinde bunlar görünmez ancak tek tek yazarsan görünür.
        echo "ISIM adındaki ortam değişkenini değeri: " . getenv("ISIM") . "<br />";
        echo "SOYISIM adındaki ortam değişkenini değeri: " . getenv("SOYISIM") . "<br />";
        echo "bilgi adındaki ortam değişkenini değeri: " . getenv("bilgi") . "<br />";
    ?>
</body>
</html>