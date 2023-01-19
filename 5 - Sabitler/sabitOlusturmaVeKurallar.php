<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabit Oluşturma ve Kurallar</title>
</head>
<body>
    <?php
    
        /**
         * Sabit : Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
         * Kurallar :
            * 1. Sabitler ve içerikleri define() fonksiyonu ile veya const tanımı ile oluşturulur.
            * 2. Sabit isimleri mutalak bir harf veya _ (alt çizgi) ile başlamalıdır.
            * 3. Sabit isimleri hiçbir zaman bir rakam ile başlayamaz.
            * 4. Sabit isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
            * 5. Sabit isimleri içerisinde hiçbir zaman boşluk, Türkçe karakterler veya özel karakterler kullanılamaz.
            * 6. Sabit isimleri tanmlanırken , PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
            * 7. Sabit isimleri büyük harf / küçük harf duyarlıdır. İstenirse harf duyarlılığı iptal edilebilir.
            * 8. Sabit isimleri birden fazla kez kullanılamaz.
            * 9. Sabitler kapsama / etki alanı kurallarına tabi değildir ve her alandan erişilebilir.
         */
    

        // $isim = "Selim Tekin";
        // echo $isim;


        // Sabit adları küçük de yazılabilir fakat büyük harfle yazılması tavsiye ediliyor.
        // define("ISIM", "Selim Tekin");  // sabit adı ve sabit değeri (değişken adı ve değeri gibi).
        // echo ISIM;                      // sabitler echo ile yazdırılırken $ işareti kullanılmaz.


        // const ISIM = "Selim Tekin";        // const ile de sabit tanımlanır.
        // echo ISIM;


        // define("ISIM", "Selim Tekin", TRUE); // TRUE yazarsak büyük / küçük harf duyarlılığı kalkar. const'ta böyle bir şey yok. FAKAT ARTIK DESTEKLENMİYOR!!!
        // echo isim;


        // ilk oluşturulan sabiti yazar. Çıktı olarak önce hata kodunu yazar sonra ilk oluşturulan sabiti yazar. const'ta da geçerli.
        // define("ISIM", "Selim Tekin");
        // define("ISIM", "Ali Tekin");    // Sabit isimleri birden fazla kez kullanılamaz. Dolayısıyla sabitler daha sonradan değiştirilemez.
        // echo ISIM;


        // BURADAN AŞAĞISI ÖNEMLİ!!!
        
        // function deneme(){
        //     define("ISIM", "Selim Tekin");
        // }
        // deneme();
        // echo ISIM;                         // sorunsuz çalışır


        // function deneme(){
        //     const ISIM = "Selim Tekin";      // HATA, define ile local alanda sabit tanımlanırsa çalışır, fakat const ile çalışmaz
        // }
        // deneme();
        // echo ISIM;


        // define("ISIM", "Selimmm Tekin");

        // function deneme(){
        //     echo ISIM;
        // }
        // deneme();                               // sorunsuz çalışır. Değişkenlerde global alandakini kullanamıyorduk fakat sabitlerde kullanabiliyoruz. Değişken ve sabitin bir farkı da budur.


        const ISIM = "Selimmm Tekin";

        function deneme(){
            echo ISIM;
        }
        deneme();                               // sorunsuz çalışır
    ?>
</body>
</html>