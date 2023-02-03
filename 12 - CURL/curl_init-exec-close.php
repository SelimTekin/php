<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl_init(), curl_exec() ve curl_close()</title>
</head>
<body>
    <?php
    
        /**
         * curl_init() : Yeni bir CURL oturumu başlatmak / tanımlamak için kullanılır.
         * curl_exec() : Kendisine parametre olarak verilen değer doğrultusunda başaltaılmış olan bir CURL oturumunu çalıştırmak için kullanılır.
         * curl_close() : Kendisine parametre olarak verilen değer doğrultusunda başaltaılmış olan bir CURL oturumunu sonlandırmak / kapatmak için kullanılır.
         */
    

        // Eğer sayfada yönlendirme varsa o sayfa açılmaz. ( Yönlendirme nasıl olur? Mesela sayfa yapım aşamasındadır ve site içerisinde basşka sayfaya yönlendiririyordur. )

        // Çoğu yazılımcı init için $ch değişkenini kulllanır. channel'ın kısaltması
        $ch = curl_init("https://www.youtube.com/"); // curl oturumunu başlattık. exec yapmadan sayfa açılmaz arka planda başlamış durumda olur sadece.
        curl_exec($ch);                              // çalıştırdık. url'de hala localhost yazar.
        curl_close($ch);                             // kapatmazsak sayfa sürekli yüklenir.
    ?>
</body>
</html>