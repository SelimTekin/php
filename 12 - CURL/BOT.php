<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOT</title>
</head>
<body>
    <?php
    
        $oturum = curl_init();
        // curl_setopt($oturum, CURLOPT_URL, "https://www.sahibinden.com/");
        curl_setopt($oturum, CURLOPT_URL, "https://www.turkcell.com.tr/");
        curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
        $sonuc = curl_exec($oturum);
        curl_close($oturum);
        // echo $sonuc;
        // $sonuc değişkeninde src=" ile başlayan, içerisinde herhangi bir değer barındıran ve "  ile bitenleri yakala ve $degerler dizisine ata.
        preg_match_all('/src="(.*?)" /', $sonuc, $degerler);

        // [0]'da src içinde resim url'leri yazıyor [1]'de sadece url'ler yazıyor. O yüzden [1] yazdık. Bize url lazım src değil.
        $temizDizi = array_unique($degerler[1]); // tekrarlayan değerler için yaptık.
        // echo "<pre>";
        // print_r($temizDizi);
        // echo "</pre>";


        foreach($temizDizi as $icerik){
            // Bu işe yaramadı çünkü sonunda farklı şeyler yazan fotoğraflar da var. O yüzden string arama fonksiyonu ( strstr() ) kullandık.
            // $uzantiBul = substr($icerik, -4); // son 4 haneyi bul.            
            if((strstr($icerik, "jpeg")) or (strstr($icerik, ".jpg")) or (strstr($icerik, ".png")) or (strstr($icerik, ".bmp")) or (strstr($icerik, ".gif"))){
                // echo $icerik . "<br />"; // url'leri ekrana yazdırdık.
                // echo "<img src='" . $icerik . "'>"; // fotoğrafları ekranda gösterdik.

                $parcala = explode("/", $icerik);
                // echo "<pre>";
                // print_r($parcala);
                // echo "</pre>";

                $bol = explode("?", end($parcala));
                $temizParca = $bol[0];
                echo count($temizDizi);
                echo $temizParca . "<br />";

                $uzantiBul = substr($temizParca, -4);
                if($uzantiBul == "jpeg"){
                    $dosyaAdiIcinUzanti = "." . $uzantiBul;
                }
                else{
                    $dosyaAdiIcinUzanti = $uzantiBul;
                }
                $isim = md5(uniqid(mt_rand())); // Her zaman tekrarlanmayan bir değer oluşturduk.
                $dosyaAdi = $isim . $dosyaAdiIcinUzanti;

                $dosya = file_get_contents($icerik); // dosya içeriğini okuyoruz.
                if($dosya){ // dosyayı okuyabiliyorsak
                    file_put_contents($dosyaAdi, $dosya); // kaydet    file_put_contents(dosyanın yeni adı, nerden oluşturacak)
                }

            }
        }
    
    ?>
</body>
</html>