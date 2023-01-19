<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__LINE__</title>
</head>
<body>
    <?php
    
        /**
         * __LINE__ : PHP dosyası içerisinde bulunduğu satırın, satır numarası bilgisini döndürür.
         */

        
        // echo "İlgili kodun bulunduğu satır numarası : " . __LINE__; // Bulunduğu satır numarasını yazar.


        $satirNumarasi = __LINE__;      // Tanımlandığı satır numarasını yazar. Yani 20

        echo "İlgili kodun bulunduğu satır numarası : " . $satirNumarasi; // Çıktı : 20
    ?>
</body>
</html>