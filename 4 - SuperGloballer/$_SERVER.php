<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER Super Globali</title>
</head>
<body>
    
    <?php

    /**
     * $_SERVER : Http server'ı tarafından oluşturulan, server ve işletme ortamı bilgilerine ulaşılabilme imkanı tanır.
     * Fakat her Http server'ı bu değerleri oluşturacak diye bir garanti yoktur. Ayrıca her Http server'ı farklı değerler üretebilir.
     */
    
        echo '$_SERVER["PHP_SELF"] => ' . $_SERVER["PHP_SELF"] . "<br/>"; // Şu an çalışmakta olan php dosyanın yolunu yazar. Domain'i yazmaz.
        echo '$_SERVER["GATEWAY_INTERFACE"] => ' . $_SERVER["GATEWAY_INTERFACE"] . "<br/>";

        // Sunucu IP adresini yazar. Localhost'ta ::1 yazar. 
        echo '$_SERVER["SERVER_ADDR"] => ' . $_SERVER["SERVER_ADDR"] . "<br/>";

        // Sunucu adını yazar. Localde localhost yazar. İnternet ortamına atıldığında mesela extraegitim.net yazar.
        echo '$_SERVER["SERVER_NAME"] => ' . $_SERVER["SERVER_NAME"] . "<br/>";

        /**php dosyasının çalıştığı server'ın yazılım bilgisi değerlerini döndürür.
        Kurduğumuz paket programı içerisindekiler : 
        Apache/2.4.52 -> Apache sunucusu ve sürümü, (Win64) -> 64 bit Windows işletim sistemi (programı 32 bit olarak kurduysan 32 yazar),
        OpenSSL/1.1.1m -> Açık güvenli katman. Bütün sunucularda vardır, PHP/8.1.2 -> PHP dosyalarını çalıştıran PHP yazılımı ve sürümü
         */
        echo '$_SERVER["SERVER_SOFTWARE"] => ' . $_SERVER["SERVER_SOFTWARE"] . "<br/>";

        // PHP dosyasının işlem yapıldığı protokolün isim ve sürüm bilgisini verir.
        echo '$_SERVER["SERVER_PROTOCOL"] => ' . $_SERVER["SERVER_PROTOCOL"] . "<br/>";

        // PHP dosyasına erişim için kullanılan istek yöntemi bilgisi değerini döndürür.
        echo '$_SERVER["REQUEST_METHOD"] => ' . $_SERVER["REQUEST_METHOD"] . "<br/>";

        // 1 Ocak 1970'ten itibaren geçen saniye. Zaman damgası. (PHP'de 18 Ocak 2023 diye bir şey yoktur)
        echo '$_SERVER["REQUEST_TIME"] => ' . $_SERVER["REQUEST_TIME"] . "<br/>";

        // PHP dosyasına erişim için başlatılan isteğin mikrosaniye değeri de dahil olmak üzere zaman damgası. Yukarıdakiyle aynı ama mikrosaniye değeri de var
        echo '$_SERVER["REQUEST_TIME_FLOAT"] => ' . $_SERVER["REQUEST_TIME_FLOAT"] . "<br/>";

        // PHP dosyasına erişim esnasında kullanılan sorgu dizesi bilgisi döner. 
        // URL'de ? (soru işareti) 'den sonraki kısım sorgu dizesidir ve o yazar. Sayfaya etki etmez. Yine sayfa açılır sorgu dizesi ne olursa olsun.
        echo '$_SERVER["QUERY_STRING"] => ' . $_SERVER["QUERY_STRING"] . "<br/>";

        // Kök dizini bilgisini döndürür. Çıktı : C:/xampp/htdocs
        echo '$_SERVER["DOCUMENT_ROOT"] => ' . $_SERVER["DOCUMENT_ROOT"] . "<br/>";

        // PHP dosyasına erişim için kabul edilen başlık bilgileri.
        echo '$_SERVER["HTTP_ACCEPT"] => ' . $_SERVER["HTTP_ACCEPT"] . "<br/>";
        
        // PHP dosyasına erişim için kabul edilen kodlama başlık bilgileri.
        echo '$_SERVER["HTTP_ACCEPT_ENCODING"] => ' . $_SERVER["HTTP_ACCEPT_ENCODING"] . "<br/>";

        // Lisan başlık bilgilerini döndürür. Çıktı : tr-TR,tr;q=0.9,en-US;q=0.8,en;q=0.7
        echo '$_SERVER["HTTP_ACCEPT_LANGUAGE"] => ' . $_SERVER["HTTP_ACCEPT_LANGUAGE"] . "<br/>";

        // PHP dosyasına erişim için kabul edilen bağlantı başlık bilgileri. Çıktı keep-alive olduğu zaman hayatta kal anlamına gelir.
        // Yani sürekli bağlı kal anlamına gelir. Bu sayede sayfaya daima bağlı kalabiliyoruz. Böylece sayfaları görüntüleyebiliyoruz.
        echo '$_SERVER["HTTP_CONNECTION"] => ' . $_SERVER["HTTP_CONNECTION"] . "<br/>";

        // PHP dosyasının çalıştığı host başlığı bilgisini döndürür. Domain oluyor aslında. Şu anda localhost olarak gözükür. İnternete attığımzda domain adı herneyse o yazacak.
        echo '$_SERVER["HTTP_HOST"] => ' . $_SERVER["HTTP_HOST"] . "<br/>";

        // Hangi sayfadan bu sayfaya geldiyse o sayfanın adresi yazar. Yani referansını yazar.
        // Örneğin GLOBALS.php dosyasındaki bir linke tıklayarak $_SERVER.php(bu sayfa) sayfasına ulaşırsa referans GLOBALS.php sayfası olur ve o dosyanın adresi yazar.
        // (Şu anda bir şey yazmaz çünkü direkt olarak bu sayfayı açtık)
        echo '$_SERVER["HTTP_REFERER"] => ' . $_SERVER["HTTP_REFERER"] . "<br/>";

        // Kullanıcı browser'ı sistem bilgisi döndürür.
        // Çıktı : Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36
        // Yandex ve Google Chrome neredeyse aynı altyapıyı kullandığı için sondan ikinci değerler geçerli oluyor. Diğerlerinde sonda yazıyor.
        echo '$_SERVER["HTTP_USER_AGENT"] => ' . $_SERVER["HTTP_USER_AGENT"] . "<br/>";

        // HTTPS protokolünün olup olmadığını söyler. Varsa on yazar.
        echo '$_SERVER["HTTPS"] => ' . $_SERVER["HTTPS"] . "<br/>";

        // Çalışmakta olan PHP dosyasını görüntüleyen kullanıcının IP adres bilgisi değerini döndürür.
        // Şu anda localhostta çalıştığımız için ::1 yazar. Localde IP alınma işlemi yapılmıyor.
        echo '$_SERVER["REMOTE_ADDR"] => ' . $_SERVER["REMOTE_ADDR"] . "<br/>";

        // Ziyaretçinin bilgisayar adını(host başlığı) yazar. Örneğin asusvivobook
        echo '$_SERVER["REMOTE_HOST"] => ' . $_SERVER["REMOTE_HOST"] . "<br/>";

        // Çalışmakta olan PHP dosyasına bağlandığım port numaram yazar.
        // Yani web serverıyla haberleşmek için hangi portu kullanıyorsam onu yazar. Art arda sayfayı yenilersen ara ara port numarası değişebilir.
        echo '$_SERVER["REMOTE_PORT"] => ' . $_SERVER["REMOTE_PORT"] . "<br/>";

        // Çalışmakta olan PHP dosyasının server üzerinde bulunduğu mutlak yol tanımlama bilgisi değerini döndürür.
        // PHP_SELF'te domain yazmıyordu. Bunda da yazmıyor fakat kök dizinle beraber dosya yolunu da yazıyor.
        // Çıktı : C:/xampp/htdocs/Php/4 - SuperGloballer/$_SERVER.php
        echo '$_SERVER["SCRIPT_FILENAME"] => ' . $_SERVER["SCRIPT_FILENAME"] . "<br/>";

        // PHP dosyasının çalıştığı server'ın yönetici e-mail adresini yazar.
        // Apache server'ı içerisinde "ServerAdmin" yönergesinde tanımlıdır.(Yani httpd.conf dosyasında)
        // Çıktı : postmaster@localhost
        echo '$_SERVER["SERVER_ADMIN"] => ' . $_SERVER["SERVER_ADMIN"] . "<br/>";

        // PHP dosyasının çalıştığı server'ın iletişim amacıyla kullanılan server port bilgisini verir.
        // Apache server'ı içerisinde "Listen" yönergesinde tanımlıdır.(Yani httpd.conf dosyasında)
        // Http portu -> 80, Https portu -> 443
        echo '$_SERVER["SERVER_PORT"] => ' . $_SERVER["REMOTE_ADDR"] . "<br/>";

        // SERVER_SOFTWARE, HTTP_HOST VE SERVER_PORT. Bunlar birbirine eklenir ve imzayı oluşturur. Buna da sunucu imzası ismi veriliyor.
        // Çıktı : Apache/2.4.52 (Win64) OpenSSL/1.1.1m PHP/8.1.2 Server at localhost Port 80
        echo '$_SERVER["SERVER_SIGNATURE"] => ' . $_SERVER["SERVER_SIGNATURE"] . "<br/>";

        // Çalışmakta olan PHP dosyasının server üzerinde bulunduğu yol tanımlama bilgisi değerini döndürür.
        // PHP_SELF'te olduğu gibi
        // Çıktı : /Php/4 - SuperGloballer/$_SERVER.php
        echo '$_SERVER["SCRIPT_NAME"] => ' . $_SERVER["SCRIPT_NAME"] . "<br/>";

        // Çalışmakta olan PHP dosyasının URI değerini döndürür. Web sitesinin alan adını ve PHP dosyası adının içermez.
        // URI -> Uniform Resource Identifier (Nizami Kaynak Tanıtıcı)
        // Localde çalıştığımız için dosya adı şimdilik yazar ama internet ortamına atıldığında yazmaz.
        echo '$_SERVER["REQUEST_URI"] => ' . $_SERVER["REQUEST_URI"] . "<br/>";


        // Sunucuda hangi super global işlevleri kullanılıyor. Onu bu şekilde görebiliriz.
        echo "<pre>";
        print_r($_SERVER);
        echo "</pre>";

    ?>

</body>
</html>