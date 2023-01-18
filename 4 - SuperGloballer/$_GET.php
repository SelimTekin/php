<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET</title>
</head>
<body>
    <?php

        /**
         * $_GET : URL(Uniform Resource Locator)(Nizami Kaynak Bulucu) üzerinden gelen verilere ulaşılabilme imkanı tanır.
         * Genellikle URL üzeriden gelen istekler ve form işleme işlemleri için kullanılmaktadır.
         */

         $gelenIsim      = $_GET["isim"];
         $gelenSoyisim   = $_GET["soyisim"];

         echo $gelenIsim . " " . $gelenSoyisim;

    ?>
</body>
</html>