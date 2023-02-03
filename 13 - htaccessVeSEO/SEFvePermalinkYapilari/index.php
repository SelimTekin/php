<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEF Link ve Permalink Yapısı</title>
</head>
<body>
    <?php
    
        function SEO($deger){
            $icerik       = trim($deger); // başındaki ve sonundaki boşlukları sildik.

            // Türkçe karakterleri değiştiriyoruz. Yani SEO uyumlu yapıyoruz.
            $degisecekler = array("ç", "Ç", "ğ", "Ğ", "ı", "İ", "ö", "Ö", "ş", "Ş", "ü", "Ü");
            $degisenler   = array("c", "c", "g", "g", "i", "i", "o", "o", "s", "s", "u", "u");
            $icerik       = str_replace($degisecekler, $degisenler, $icerik);
            $icerik       = mb_strtolower($icerik, "UTF-8");    // Bütün harfleri küçük harflere dönüştürdük. mb sayesinde karakter seti de belirtebiliyoruz. Yoksa sadece strtolower da kullanbiliriz.
            $icerik       = preg_replace("/[^a-z0-9.]/", "-", $icerik); // $icerik'te a'dan z'ye, 0'dan 9'a ve . (nokta) hariç hepsini -'ye çeviriyoruz. Düzenli ifadeleri // arasına yazıyoruz.
            $icerik       = preg_replace("/-+/", "-", $icerik); // - işareti 1 veya daha fazla kez tekrarlanıyorsa bunu tek hale çevir.
            $icerik       = trim($icerik, "-");                 // Başında ve sonunda bulunan bütün - işaretlerini yok ediyoruz.
            return $icerik;
        }

        // $urun = "+Sony Ultra HD Dahili Uydu Alıcılı Smart Led ? ) = % & TV 38885988456-"; // Bunda denemeler yaptık
        $urun = "vasita-otomobil-volkswagen-sahibinden-golf-6-1.4-tsi-higihline";

        echo "Orijinal Metin : <br />";
        echo $urun . "<br />";

        // SEF Link yani Permalink Yapısı
        echo "SEF Link / Permalink Yapısı : <br />";
        echo SEO($urun) ;
    
    ?>
</body>
</html>