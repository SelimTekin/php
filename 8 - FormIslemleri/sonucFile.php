<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veri Alınan Sayfa</title>
</head>
<body>
    <?php
    
        $gelenDosya        = $_FILES["dosya"];              // Dosya verilerini bu değişkene atadık.(dizi olarak gelir)

        $dosyaAdi          = $gelenDosya["name"];
        $dosyaTuru         = $_FILES["dosya"]["type"];      // Bu şekilde de olur
        $dosyaTempAdi      = $gelenDosya["tmp_name"];       // Dosya işlemlerinde ilgili dosya geçici bir dizine depolanır. (Buraya yani)
        $dosyaHataDurumu   = $gelenDosya["error"];
        $dosyaBoyutu       = $gelenDosya["size"];

        $yol               = "Dosyalar/";                   // Resimler adındaki klasörün içine yükleyecez gelen dosyayı
        $dosyaYoluVeAdi    = $yol.$dosyaAdi;

        // Gerçek internet oratmında aynı dosya adı gelirse üstüne yazar. Yani önceki silinir yenisi yüklenir klasöre.
        // Bazı sunucularda okuma ve yazma yetkileri kapalıdır.
        // Dosyanın yükelenceği klasöre sağ tıklayıp özelliklerde izinleri 777 yapman lazım.
        // Bu yapılmazsa resim yüklenir ama boş gelir. Çünkü klasöre yazılmaz.(CHMOD ayarları)
        // move_uploaded_file($dosyaTempAdi, $dosyaYoluVeAdi); // Dosyayı $dosyaTempAdi değişkeninden alıp Resimler klasörüne koyuyoruz dosya adıyla beraber. Yani nereden alıp nereye koyuyoruz anlamına geliyor parametrelerin sırası.


        if(move_uploaded_file($dosyaTempAdi, $dosyaYoluVeAdi)){ // move_uploaded_file() fonksiyonunu buraya yazıyoruz. Hem yükleme yapacak hem de yükleme yapılmışsa if'in içi çalışacak

            echo "Dosya Başarılı Bir Şekilde Yüklendi.<br/>";
            echo "Dosyanın Adı : " . $dosyaAdi . "<br/>";
            echo "Dosyanın Türü : " . $dosyaTuru . "<br/>";
            echo "Dosyanın Geçici Dizin ve Temp Adı : " . $dosyaTempAdi . "<br/>";
            echo "Dosyanın Hata Durumu : " . $dosyaHataDurumu . "<br/>";
            echo "Dosyanın Boyutu : " . $dosyaBoyutu . "<br/>";
            echo "<img src='{$dosyaYoluVeAdi}'>";

        }else{
            echo "Dosya yükleme sırasında bilinmeyen bir hata oluştu.";
        }
    
    ?>
</body>
</html>