<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpinfo() Fonksiyonu</title>
</head>
<body>
    
    <?php
        /**
         * phpinfo()          : PHP'nin o anki durumu hakkındaki bilgilerin ekran çıktılanmasını sağlamak için kullanılır.
         * Değerler           : INFO_ALL | INFO_LICENSE | INFO_CREDITS | INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES | INFO_ENVIRONMENTS | INFO_VARIABLES
         * INFO_ALL           : TÜM BİLGİLER (ÖNTANIMLI DEĞERDİR YANİ VARSAYILAN)
         * INFO_LICENSE       : LİSANS BİLGİLERİ
         * INFO_CREDITS       : KATKIDA BULUNANLARIN BİLGİLERİ
         * INFO_GENERAL       : GENEL BİLGİLER
         * INFO_CONFIGURATION : KONFİGÜRASYON BİLGİLERİ
         * INFO_MODULES       : MODÜL BİLGİLERİ
         * INFO_ENVIRONMENT  : ORTAM BİLGİLERİ
         * INFO_VARIABLES     : $_SERVER SÜPER GLOBALİ / ÖNTANIMLI DEĞİŞKEN BİLGİLERİ
         */

        //  phpinfo();
        //  phpinfo(INFO_ALL); # yukarıdakiyle aynı
        //  phpinfo(INFO_LICENSE);
        //  phpinfo(INFO_CREDITS);
        //  phpinfo(INFO_GENERAL);
        //  phpinfo(INFO_CONFIGURATION);
        //  phpinfo(INFO_MODULES);
        //  phpinfo(INFO_ENVIRONMENT);
         phpinfo(INFO_VARIABLES);
    ?>

</body>
</html>