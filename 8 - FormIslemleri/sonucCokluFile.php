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
    
        $gelenDosyalar = $_FILES["Dosyalar"];

        // echo "<pre>";
        // print_r($gelenDosyalar);
        // echo "</pre>";

        // Anahtar adındaki değişkene elemanın anahtarı depolansın. Eleman adındaki değişkene de elemanın değeri depolansın.
        // Mesela [0] => C:\xampp\tmp\php6F1F.tmp artık böyle olur 0 = C:\xampp\tmp\php6F1F.tmp
        foreach($gelenDosyalar["tmp_name"] as $anahtar => $eleman){

            // echo $enahtar . " = " . $eleman . "<br/>";

            $anahtarDegeri           = $anahtar;
            $dosyaAdi                = $gelenDosyalar["name"][$anahtar];
            $dosyaTuru               = $gelenDosyalar["type"][$anahtar];
            $dosyaGeciciDizinVeAdi   = $gelenDosyalar["tmp_name"][$anahtar];
            $dosyaHataDurumu         = $gelenDosyalar["error"][$anahtar];
            $dosyaBoyutu             = $gelenDosyalar["size"][$anahtar];

            $dosyaYuklemeDiziniVeAdi = "Dosyalar/" . $dosyaAdi;

            // Sadece resim değil rar, word, excel, txt... gibi farklı dosyalar da yükleyebiliriz.
            if(move_uploaded_file($dosyaGeciciDizinVeAdi, $dosyaYuklemeDiziniVeAdi)){

                echo "Anahtar : " . $anahtar . "<br/>";
                echo "Dosya Adı : " . $dosyaAdi . "<br/>";
                echo "Dosya Türü : " . $dosyaTuru . "<br/>";
                echo "Dosya Geçici Dizini ve Temp Adı : " . $dosyaGeciciDizinVeAdi . "<br/>";
                echo "Dosya Hata Durumu : " . $dosyaHataDurumu . "<br/>";
                echo "Dosya Boyutu : " . $dosyaBoyutu . "<br/>";
                echo "<img src='{$dosyaYuklemeDiziniVeAdi}'><br/><br/>";

            }else{
                echo "Dosya Yükleme Sırasında Hata Oluştu...!<br/>"; // <br/> koyduk çünkü birden fazla dosya yükleme hatası olursa alt alta yazsın diye
            }

        }
    
    ?>
</body>
</html>