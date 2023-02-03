<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curl_setopt() ve curl_setopt_array()</title>
</head>
<body>
    <?php
    
        /** 
         * curl_setopt()       : Kendisine parametre olarak verilen değer doğrultusunda başlatılmış bir CURL oturumuna seçenek eklemek için kullanılır.
         * curl_setopt_array() : Kendisine parametre olarak verilen değer doğrultusunda başlatılmış bir CURL oturumuna seçenek / seçenekler eklemek için kullanılır.
         * 
         * CURLOPT_URL            : Başlatılımış bir CURL oturumunda içeriğine ulaşılmka istenilen URL adresini belirtmek için kullanılır.
         * CURLOPT_RETURNTRANSFER : Başlatılımış bir CURL oturumunda istenilen URL'den elde edilen içeriğin doğrudan ekrana çıktılanmasını
         * durdurarak beliirtilecek olan değişkene aktarılmasını sağlamak için kullanılır.
         * CURLOPT_TIMEOUT        : Başlatılımış bir CURL oturumunda maksimum çalıştırılabilirlik süresini saniye cinsinden belirtmek için kullanılır.
         * CURLOPT_TIMEOUT_MS     : Başlatılımış bir CURL oturumunda maksimum çalıştırılabilirlik süresini milisaniye cinsinden belirtmek için kullanılır. ( 1 saniye = 1000 milisaniye )
        */
    
    
        // $oturum = curl_init();

        // // $oturum adındaki curl oturumuna bir ayar yaptık. Bağlantı kurulacak URL ayarını gönderdik.
        // // init içerisinde değil de bu şekilde olursa daha okunaklı ve etkili olur.
        // curl_setopt($oturum, CURLOPT_URL, "https://www.sahibinden.com");

        // // Ekran çıktılanmaz yani sayfa görünmez ama verileri bir değişkene depolayabiliriz. echo ile değişkeni yazdırırsak ekran çıktılanır.
        // // Aşağıda $sonuc değişkenine depoladık.
        // // false veya 0 (sıfır) olursa ekran çıktılanır.
        // curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);

        // // 90 saniye (int olmalı) sonra veri curl oturumu sonlanır. Veri alımı sonlanır. AMA SAYFA YİNE DE YÜKLENİR ONUNLA BİR ALAKASI YOK. Genelde 90 saniye olur.
        // curl_setopt($oturum, CURLOPT_TIMEOUT, 90);
        
        // // Daha kritik işlemler için kullanılır. Örneğin yarım saniye sonra sonlanır.
        // curl_setopt($oturum, CURLOPT_TIMEOUT_MS, 500);        
        
        // $sonuc  = curl_exec($oturum);
        // curl_close($oturum);

        // echo $sonuc;



        // curl_setopt_array -> DİZİ HALİNDE SETOPT

        // $oturum = curl_init();
        // curl_setopt_array($oturum, [
        //     CURLOPT_URL => "https://www.sahibinden.com",
        //     // CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_RETURNTRANSFER => 1, // true yerine 1 false yerine 0 (sıfır) da yazılabilir
        //     CURLOPT_TIMEOUT => 90,
        //     // CURLOPT_TIMEOUT_MS => 500 // ya TIMEOUT ya da TIMEOUT_MS kullan
        // ]);
        // $sonuc = curl_exec($oturum);
        // curl_close($oturum);
        // echo $sonuc;


        // Diziyi dışarıda da tanımlayabiliriz

        $oturum = curl_init();
        $secenekler = array(
            CURLOPT_URL => "https://www.sahibinden.com", 
            CURLOPT_RETURNTRANSFER => 1, 
            CURLOPT_TIMEOUT => 90
        );
        curl_setopt_array($oturum, $secenekler);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        echo $sonuc;
        
    ?>
</body>
</html>