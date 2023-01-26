<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_html_translation_table</title>
</head>
<body>
    <?php
    
        /**
         * get_html_translation_table() : PHP yazılımı içerisinde kullanılabilecek olan sisteme tanımlı tüm htmlspecialchars() ve html_entities()
         * dönüştürülebilir karakterlerinin listesini bulur ve bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geri döndürür.
         *      HTML_ENTITIES     : get_html_translation_table metodu kullanılarak htmlentities metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır.
         *      HTML_SPECIALCHARS : get_html_translation_table metodu kullanılarak htmlspecialchars metodu için tanımlanmış ve dönüştürülecek olan karakter listesini elde etmek için kullanılır.
         */


        // $degerler = get_html_translation_table();
        // $degerler = get_html_translation_table(HTML_SPECIALCHARS); // Varsayılan 
        $degerler = get_html_translation_table(HTML_ENTITIES);     // Tüm özel karakterler listelenir.

        echo "<pre>";
        print_r($degerler);
        echo "</pre>";
    
    ?>
</body>
</html>