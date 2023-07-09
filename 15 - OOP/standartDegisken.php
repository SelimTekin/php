<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standart Değişken</title>
</head>
<body>
    <?php
        // var : Herhangi bir sınııf içerisinde standart değişken tanımlamak için kullanılır. Class içerisinde public, private veya protected yazmazsak hata verir. Bunları yazmak istemiyorsak ve normal bir değişken oluşturmak istiyorsak var ifadesini kullanıyoruz.

        class Deneme{
            var $isim = "Selim";
            const SOYISIM = "Tekin"; // const her zamanki gibi
        }

        $islem = new Deneme;

        echo $islem->isim;
        echo Deneme::SOYISIM;
    ?>
</body>
</html>