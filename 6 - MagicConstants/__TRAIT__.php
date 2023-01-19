<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__TRAIT__</title>
</head>
<body>
    <?php
    
    /**
     * __TRAIT__ : PHP dosyası içerisinde bulunduğu sınıf dahilinde kullanılacak olan özelliğin, özellik adı bilgisi değerini döndürür.
     * Kısacası kalıtılmış olanın adını yazar.
     */
    

    trait OzellikBir{       // trait kalıtım için
        function yazBir(){
            $sonuc = __TRAIT__;
            echo $sonuc;
        }
    }

    trait OzellikIki{
        function yazIki(){
            $sonuc = __TRAIT__;
            echo $sonuc;
        }
    }

    class Deneme{
        use OzellikBir;     // miras aldık
        use OzellikIki;
    }

    $islem = new Deneme;

    $islem->yazBir();
    echo "<br/>";
    $islem->yazIki();

    ?>
</body>
</html>