<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htmlspeicalchars() ve htmlspeicalchars_decode() Fonksiyonları</title>
</head>
<body>
    <?php
    
        /**
         * htmlspeicalchars() : Belirtilecek olan içerikte bulunabilecek olan özel karakterleri (&, ', ", <, >) düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geri döndürür.
         *      ENT_COMPAT    : htmlspeicalchars metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
         *      ENT_QUOTES    : htmlspeicalchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
         *      ENT_NOQUOTES  : htmlspeicalchars metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
         * 
         * htmlspeicalchars_decode() : Belirtilecek olan ve htmlspecialchars metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan özel karakterleri (&, ', ", <, >) orijinal karakkter haline geri dönüştürerek, dönüştürdüğü değeri geri döndürür.
         *      ENT_COMPAT    : htmlspeicalchars_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
         *      ENT_QUOTES    : htmlspeicalchars_decode metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
         *      ENT_NOQUOTES  : htmlspeicalchars_decode metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
         */


        // Sayfanın kaynak koduna bak
        $deger = "<b>PHP<b/> & <i>Selim Tekin</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
        echo $deger . "<br/><br/>"; 

        // $islemBir = htmlspecialchars($deger); // (&, ', ", <, >) düz metne dönüştürür.
        // echo $islemBir . "<br/><br/>";

        // $islemIki = htmlspecialchars($deger, ENT_COMPAT); // (&, ", <, >) düz metne dönüştürür.
        // echo $islemIki . "<br/><br/>";

        // // Önerilen bu. Hepsini dönüştürüyor. En sağlam yapı budur.
        // $islemUc = htmlspecialchars($deger, ENT_QUOTES); // (&, ', ", <, >) düz metne dönüştürür. yukarıdakinde (ENT_COMPAT) tek tırnakları dönüşüme tabi tutmamıştı ama bunda tuttu.
        // echo $islemUc . "<br/><br/>";

        // $islemUc = htmlspecialchars($deger, ENT_NOQUOTES); // (&, <, >) düz metne dönüştürür. Tek ve çift tırnaklar dönüşüme dahil değil.
        // echo $islemUc . "<br/><br/>";



        // DECODE
        

        $islem = htmlspecialchars($deger, ENT_QUOTES); // (&, ', ", <, >) düz metne dönüştürür.
        echo $islem . "<br/><br/>";

        $sonucBir  = htmlspecialchars_decode($islem); // tek tırnaklar orijinal hale dönüştürülmez.
        echo $sonucBir . "<br/><br/>";

        $sonucIki  = htmlspecialchars_decode($islem, ENT_COMPAT); // tek tırnaklar orijinal hale dönüştürülmez.
        echo $sonucIki . "<br/><br/>";

        // Geri dönüştürülürken de önerilen bu. Her şeyi geri dönüştürür.
        $sonucUc   = htmlspecialchars_decode($islem, ENT_QUOTES); // tek tırnaklar da dahil orijinal hale dönüştürülür.
        echo $sonucUc . "<br/><br/>";

        $sonucDort = htmlspecialchars_decode($islem, ENT_NOQUOTES); // tek ve çift tırnaklar orijinal hale dönüştürülmez.
        echo $sonucDort . "<br/><br/>";
    
    ?>
</body>
</html>