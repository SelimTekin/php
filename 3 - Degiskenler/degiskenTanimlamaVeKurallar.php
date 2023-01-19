<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Değişkenler</title>
</head>
<body>
    <?php

        /**
         * Değişken : Girdiğimiz değerleri alan veya programın çalışması ile bazı değerlerin atandığı veri tutuculardır.
         * Kurallar :
            * 1. Değişkenler daima $ (dolar) işareti ile başlar.
            * 2. Değişken isimleri mutalak bir harf veya _ (alt çizgi) ile başlamalıdır.
            * 3. Değişken isimleri hiçbir zaman bir rakam ile başlayamaz.
            * 4. Değişken isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
            * 5. Değişken isimleri içerisinde hiçbir zaman boşluk, Türkçe karakterler veya özel karakterler kullanılamaz.
            * 6. Değişken isimleri tanmlanırken , PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
            * 7. Değişken isimleri büyük harf / küçük harf duyarlıdır.
            * 8. Değişken isimleri birden fazla kez kullanılabilir. Fakat değişken isimlerinin tekrar edilmesi durumunda, daima son değişkenin değeri gerçek değer olarak kabul edilecektir.
            * 9. Değişkenler kapsama / etki alanı kurallarına tabidir.
         */

         $Deger = "Selim Tekin";
         $_Deger = "Selim Tekin";

        //  $1Deger = "Selim Tekin";  // HATA, Çünkü değişken ismi rakamla başladı (Parse error: syntax error)

         $De2ger = "Selim Tekin";
         $Deger2 = "Selim Tekin";
         $De_ger = "Selim Tekin";
         $Deger_ = "Selim Tekin";
         $De_ger2 = "Selim Tekin";
         $De2ger_ = "Selim Tekin";

        //  $De ger = "Selim Tekin";   // HATA, Çünkü değişken ismi içerisinde boşluk kullanıldı (Parse error: syntax error)
        
        $Değer = "Selim Tekin";        // (Kritik hata) Şimdi çalışır fakat gerçek ortama atıldığında bazı hostlar veya bazı sunucular Türkçe karakterleri algılayamazlar. Diğer tüm dillerde de.
        $Deger = "Selim Tekin";

        // $De(ger = "Selim Tekin";    // HATA, Çünkü değişken ismi içerisinde özel kullanıldı (Parse error: syntax error)
        // $De'ger = "Selim Tekin";    // HATA, Çünkü değişken ismi içerisinde özel kullanıldı (Parse error: syntax error)

        $if = "Selim Tekin";           // HATA, Çünkü değişken ismi içerisinde PHP'nin kullandığı özel bir tanım kullanıldı.Normalde çalışır fakat Türkçe karakter sorunu gibi sorun çıkartabilir.
        $deger = "Selim Tekin";        // Büyük küçük harf duyarlılığı
        $Deger = "Selim";              // Büyük küçük harf duyarlılığı (ikisi farklı)

        $deger = "Selim Tekin";
        $deger = "Selim";              // iki değişkenin ismi aynı fakat sondaki dikkate alınır.

        function deneme(){
            $Deger = "Selim Tekin";    // Bunu echo ile dışarıda çağırırsak hata verir. Çünkü local bir değişken. Sadece fonksiyon içinde kullanılabilr. 
        }
        $Deger = "Selim";              // Global değişken olduğu içinde echo ile çağırabiliriz.

        echo $deneme;                  // HATA, Çünkü değişken ilgili kod satırından önce tanımlamadı yani bu satırın üstündeki satırlarda deneme adında değişken tanımlanmadı altında tanımlandı.
        $deneme = "Selim Tekin";

    ?>
</body>
</html>