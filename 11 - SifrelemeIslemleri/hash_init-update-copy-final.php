<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hash_init(), hash_copy(), hash_update() ve hash_final()</title>
</head>
<body>
    <?php
    
        /**
         * hash_init()   : hash özeti üretme işlemini başlatmak ve algoritma türünü belirtmek için kullanılır.
         * hash_update() : Belirtilecek olan içeriği, daha önceden hash özeti üretme işlemi başlatılmış bir işleme dahil etmek için kullanılır.
         * hash_copy()   : hash özeti üretme işlemlerini başlatmak ve algoritma türünü belirlemek için daha önceden oluşturulmuş olan hash_init() metodunu kopyalamak için kullanılır.
         * hash_final()  : Daha önceden hash özeti üretme işlemi başlatılarak içeriği de dahil edilmiş bir işlemin hash özetini üreterek, ürettiği değeri geriye döndürür.
         */


        // $deger   = "Selim Tekin";
        // echo "Orijinal içerik : " . $deger . "<br />";

        // $olustur = hash("md5", $deger);
        // echo "md5 özeti : " . $olustur . "<br />";



        // Yapıyı oluşturalım (Aslında bu kısım hash() ile aynı ama parçalı hali)

        // // Başlat
        // $sifreleme = hash_init("md5");       // hash işlemi başlatılacak ve algoritma olarak md5 kullanılacak
        
        // // İçeriği Ekle
        // hash_update($sifreleme, $deger);     // Başlatılmış md5 algoritmalı şifreleme yapısında içerik olarak da $deger değişkeni tutulacak.
        
        // // Değeri Döndürür.
        // $sonuc     = hash_final($sifreleme); // Özeti üretir.

        // echo "Parçalı yapıda oluşturulmuş md5 özeti : " . $sonuc . "<br />";



        // Birden fazla update

        // $deger1   = "Selim";
        // echo "Orijinal içerik : " . $deger1 . "<br />";
        // $deger2   = "Tekin";
        // echo "Orijinal içerik : " . $deger2 . "<br />";

        // $sifreleme = hash_init("md5");

        // hash_update($sifreleme, $deger1);  // İlk update edildiğinde içerik : Selim
        // hash_update($sifreleme, $deger2);  // Ek update edildiğinde içerik : SelimTekin   hash_update yaptığımız müddetçe içeriğe ek yapar. Yani içerik SelimTekin oldu ve onu şifreledi. Kanıtı echo işlemlerinde var.

        // $sonuc     = hash_final($sifreleme);

        // echo "md5 özeti : " . $sonuc . "<br />";
        // // echo md5($deger1 . $deger2);



        // Copy -> Hem başlatma işlemi hem algoritmayı hem de içeriği dahil ederek kopyalar.

        $deger1   = "Selim";
        echo "Orijinal içerik : " . $deger1 . "<br />";
        $deger2   = "Tekin";
        echo "Orijinal içerik : " . $deger2 . "<br />";

        $sifreleme = hash_init("md5");

        hash_update($sifreleme, $deger1);   // Selim
        $kopyala  = hash_copy($sifreleme);  // Selim içeriğini elinde tutar.
        $sonucBİr = hash_final($sifreleme); // Selim içeriğinin hash özeti üretildi.
        echo "md5 özeti : " . $sonucBir . "<br />";

        // finalden önce yapılmalı bu işlem.
        // $kopyala  = hash_copy($sifreleme); // Hata kodu döndürür. Çünkü $sifreleme değişkeni ile oluşturulan hash, final yapıldıktan sonra işlem başka alanda kullanılamaz.
        
        hash_update($kopyala, $deger1);     // Selim içeriği elinde bulunduğundan dolayı Tekin içeriğini de birleştireceği için artık SelimTekin olur. 
        $sonucIki = hash_final($kopyala);   // SelimTekin içeriğinin hash özeti üretildi.
        echo "md5 özeti : " . $sonucIki . "<br />";

        echo md5("SelimTekin");             // Sağlama

    
    ?>
</body>
</html>