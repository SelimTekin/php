<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /* substr()   : Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre istenilen değeri bularak bulduğu değeri geriye döndürür.
           mb_substr(): Belirtilecek olan içerikte, belirtilecek olan karakter sıra numarası aralıklarına göre, belirtilecek olan karakter
           kodlaması dahilinde gelişmiş olarak istenilen değeri bularak, bulduğu değeri geriye döndürür.
           strstr()   : Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geri döndürür.
           stristr()   : Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda herhangi bir değerin büyük / küçük harf ayrımı olmaksızın arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geri döndürür.
           strchr()   : Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, ilk eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geri döndürür.
           strrchr()   : Belirtilecek olan içerikte, belirtilecek olan değer doğrultusunda arama yaparak, eşleşen değer olması durumunda, son eşleşen değerin öncesini veya sonrasını bularak, bulduğu değeri geri döndürür.*/


        $icerik = "Selim Tekin";
        echo $icerik . "<br />";

        $sonuc = substr($icerik, 7); // 7. karakteri dahil etmeden sonrasını alır.

        $sonuc = substr($icerik, -8); // -8 dersek son 8 karakteri alır.
        echo $sonuc;
    ?>
</body>

</html>