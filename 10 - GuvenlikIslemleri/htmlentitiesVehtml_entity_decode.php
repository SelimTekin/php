<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>htmlentities ve html_entity_decode</title>
</head>
<body>
    <?php
    
        /**
         * htmlentities() : Belirtilecek olan içerikte bulunabilecek olan tüm özel karakterleri düz metin halinde okunabilir HTML metnine dönüştürerek, dönüştürdüğü değeri geri döndürür.
         *      ENT_COMPAT    : htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak " (çift tırnak) işaretlerini de dönüştürmek için kullanılır. (Varsayılan)
         *      ENT_QUOTES    : htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de dönüştürmek için kullanılır.
         *      ENT_NOQUOTES  : htmlentities metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
         * 
         * html_entity_decode() : Belirtilecek olan ve htmlentities metodu kullanılarak düz metin halinde sadece okunabilir HTML metnine dönüştürülmüş olan tüm özel karakterleri orijinal karakkter haline geri dönüştürerek, dönüştürdüğü değeri geri döndürür.
         *      ENT_COMPAT    : html_entity_decode metodu kullanılarak geri dönüştürülecek olan metin için ek olarak ' (tek tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır. (Varsayılan)
         *      ENT_QUOTES    : html_entity_decode metodu kullanılarak dönüştürülecek olan metin için ek olarak ' (tek tırnak) ve " (çift tırnak) işaretlerini de geri dönüştürmek için kullanılır.
         *      ENT_NOQUOTES  : html_entity_decode metodu kullanılarak dönüştürülecek olan metin için ' (tek tırnak) ve " (çift tırnak) işaretlerini dönüşümden çıkartmak / iptal etmek için kullanılır.
         */
    
        
        // Sayfanın kaynak koduna bak
        $deger = "<b>PHP<b/> & <i>Selim Tekin</i> & A'dan Z'ye PHP Görsel Eğitim Seti & 27\" Monitör";
        echo $deger . "<br/><br/>";

        // $islemBir = htmlentities($deger); // bütün özel karakterleri(mesela ö harfi veya sinek simgesi bir özel karakterdir) dönüştürür. Tek tırnaklara dokunmaz.
        // echo $islemBir . "<br/><br/>";

        // $islemIki = htmlentities($deger, ENT_COMPAT); // yukarıdakiyle aynı dönüştürür.
        // echo $islemIki . "<br/><br/>";

        // // Önerilen bu. Hepsini dönüştürüyor. En sağlam yapı budur.
        // $islemUc = htmlentities($deger, ENT_QUOTES); // tek tırnakları da dönüştürür. yukarıdakinde (ENT_COMPAT) tek tırnakları dönüşüme tabi tutmamıştı ama bunda tuttu.
        // echo $islemUc . "<br/><br/>";

        // $islemUc = htmlentities($deger, ENT_NOQUOTES); // Tek ve çift tırnaklar dönüşüme dahil değil.
        // echo $islemUc . "<br/><br/>";


        // DECODE
        

        $islem = htmlentities($deger, ENT_QUOTES); // bütün özel karakterleri(mesela ö harfi veya sinek simgesi bir özel karakterdir) dönüştürür.
        echo $islem . "<br/><br/>";

        $sonucBir   = html_entity_decode($islem); // tek tırnaklar orijinal hale dönüştürülmez.
        echo $sonucBir . "<br/><br/>";

        $sonucIki   = html_entity_decode($islem, ENT_COMPAT); // tek tırnaklar orijinal hale dönüştürülmez.
        echo $sonucIki . "<br/><br/>";

        // Geri dönüştürülürken de önerilen bu. Her şeyi geri dönüştürür.
        $sonucUc   = html_entity_decode($islem, ENT_QUOTES); // tek tırnaklar da dahil orijinal hale dönüştürülür.
        echo $sonucUc . "<br/><br/>";

        $sonucDort = html_entity_decode($islem, ENT_NOQUOTES); // tek ve çift tırnaklar orijinal hale dönüştürülmez.
        echo $sonDortUc . "<br/><br/>";
    ?>
</body>
</html>