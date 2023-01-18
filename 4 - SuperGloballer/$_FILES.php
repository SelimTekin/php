<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_FILES</title>
</head>
<body>
    <?php
    
        /**
        * $_FILES : Http server'ına herhangi bir dosya yükleme işlemi esnasında, ilgili dosya verilerine ulaşılabilme imkanı tanır.
        */


        // $gelenDosya = $_FILES["dosya"];

        // echo "<pre>";
        // print_r($gelenDosya);
        // echo "</pre>";

        echo "Gelen Dosyanın Adı : " . $_FILES["dosya"]["name"] . "<br/>";
        // echo "Gelen Dosyanın Adı : " . $gelenDosya["name"] . "<br/>";      // Bu şekilde de olabilir.
        echo "Gelen Dosyanın MIME Türü : " . $_FILES["dosya"]["type"] . "<br/>";
        echo "Gelen Dosyanın Temp Dizini : " . $_FILES["dosya"]["tmp_name"] . "<br/>";
        echo "Gelen Dosyanın Boyutu (Byte) : " . $_FILES["dosya"]["size"] . "<br/>";
        echo "Gelen Dosyanın Hata Kodu Değeri : " . $_FILES["dosya"]["error"] . "<br/>";

        /**
         * Çıktı olarak name, type, tmp_name, error ve size değerlerini döndürür.
         * name     -> dosya adı
         * type     -> dosyanın MIME türü(type) yani image/png mesela
         * tmp_name -> yükleme esnasında geçici olarak yüklendiği dizin
         * error    -> hata varsa onu yazar yoksa 0 (sıfır) yazar
         * size     -> dosya boyutunu byte türünden yazar
         */
    ?>
</body>
</html>