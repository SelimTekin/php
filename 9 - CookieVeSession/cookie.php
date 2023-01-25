<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php

        /**
         * setcookie()  : Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kullanılır.
         * Parametreler : 1. Parametre -> Çerez Adı, 2. Parametre -> Çerez Değeri, 3. Parametre -> Çerez Yaşam Süresi
         */
    


        // COOKIE OLUŞTURMA


        // Eğer yaşam süresi belirtmezsen cookie'lerin ömrü taraycı kapanana kadardır.
        // Normalde yaşam süresini unique zaman damgası olarak vermemiz gerekiyor. Yani şu anki zaman damgası oluyor ve buna da time() ile erişiyoruz.
        $yasamSuresi = time() + 15;                       // 15 saniye sonra çerez tarayıcıdan silinir.
        $yasamSuresi = time() + (((60 * 60) * 24) * 365); // Bir yıl -> (((saniye * dakika) * saat) * gün)

        /*
        // setcookie'yi bir kere çalıştrdıktan sonra cookie tarayıcıda depolanır ve veriler oradan gelir.
        // Önce bu alanı aç aşağıdaki yazdıran alanları gizle, sonra burayı kapat yazdıran alanları açıp kontrol et.
        setcookie("kullaniciAdi", "Selim", $yasamSuresi);
        setcookie("kullaniciSoyadi", "Tekin", $yasamSuresi); // Birden fazla cookie tanımlanabilir.
        setcookie("egitimAdi", "PHP", $yasamSuresi);
        setcookie("kullaniciAdi", "Selim1", $yasamSuresi);
        setcookie("kullaniciSoyadi", "Tekin1", $yasamSuresi);  // Aynı ada sahip cookie'lerden sonuncusu geçerli olur.
        */


        // Sayfa ilk açıldığında var mı diye kontrol eder. Yoksa oluşturur ve görmek için tekrardan sayfayı yenilememiz gerekmez.
        // if(isset($_COOKIE["kullaniciAdi"])){
        //     echo "Kullanıcı Adı : " . $_COOKIE["kullaniciAdi"] . "<br/>";
        // }
        // if(isset($_COOKIE["kullaniciSoyadi"])){
        //     echo "Kullanıcı Soyadı : " . $_COOKIE["kullaniciSoyadi"] . "<br/>";
        // }
        // if(isset($_COOKIE["egitimAdi"])){
        //     echo "Eğitim Adı : " . $_COOKIE["egitimAdi"];
        // }

        // echo "<pre>";
        // print_r($_COOKIE);
        // echo "</pre>";

        // echo "Kullanıcı Adı : " . $_COOKIE["kullaniciAdi"] . "<br/>";
        // echo "Kullanıcı Soyadı : " . $_COOKIE["kullaniciSoyadi"] . "<br/>";
        // echo "Eğitim Adı : " . $_COOKIE["egitimAdi"] . "<br/>";



        // COOKIE SİLME

        $yasamSuresi = time() - 60;
        // setcookie("kullaniciAdi", "", 0); // Yaşam süresini 0 yaptık ve cookie silindi. Değerini silsen daha iyi olur yani 2. parametreyi. Değeri silmeyince cookie silinmedi.
        setcookie("kullaniciAdi", "Selim", $yasamSuresi); // veya zamanı geri alarak da silebiliriz

        if(isset($_COOKIE["kullaniciAdi"])){
            echo "Kullanıcı Adı : " . $_COOKIE["kullaniciAdi"] . "<br/>";
        }
        if(isset($_COOKIE["kullaniciSoyadi"])){
            echo "Kullanıcı Soyadı : " . $_COOKIE["kullaniciSoyadi"] . "<br/>";
        }
        if(isset($_COOKIE["egitimAdi"])){
            echo "Eğitim Adı : " . $_COOKIE["egitimAdi"];
        }
    
    ?>
</body>
</html>