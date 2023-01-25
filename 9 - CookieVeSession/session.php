<?php
session_start(); // session_start() nuhakkak sayfanın en üstünde olmalı.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    
        /**
         * session_start()   : session başlatmak veya session'ları takip etmek için kullanılır.
         * session_destroy() : Daha önceden oluşturulmuş olan session'ları silmek için kulllanılır.
         *                     Silindikten sonra bir süre tarayıcıda ve temp klasöründe dosya olarak bulunur. Fakat tüm isim ve değer kayıtları silinir. 
         *                     Bir süre sonra temp klasöründen de otomatik olarak silinir.
         * 
         * sessionların adı ve içeriği suncudaki temp dosyası içinde tutulur. Tarayıcıdaki içerik yazan ksmı da o dosyanın adıdır.
         * Session süresi    : Hareketsiz kaldığı süre kadar oturum geçerli olsun demek.
         * Mesela pc açık ama dışarı çıkmış olabilirsin ve hareketsiz kalmıştır.
         * Oturum açıkken sitede işlem yapıyorsa zaten atmayacak onu site.
         * 
         * sessionlar tarayıcı kapatıldığında yok olur. temp klasöründen de belli bir süre sonra otomatik olarak silinir.
         * cookieler önce tarayıcıya yerleşir. Daha sonra sayfayı yenileyince cookieleri okuyabiliriz. Fakat sessionlar ilk sayfayı yüklediğimizde okunabilir.
         */

        $_SESSION["kullaniciAdi"] = "Selim";
        $_SESSION["kullaniciSoyadi"] = "Tekin";

        // echo "<pre>";
        // print_r($_SESSION);
        // echo "</pre>";
        
        // echo $_SESSION["kullaniciAdi"];
    
    ?>

    <a href="sessionOku.php">Session'ları Oku</a>
</body>
</html>