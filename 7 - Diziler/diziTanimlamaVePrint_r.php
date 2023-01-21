<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dizi Tanımlama, Kurallar ve print_r() Fonksiyonu</title>
</head>
<body>
    <?php
    
        /**
         * Dizi      : Girdiğimiz sıralı değerleri alan veya programın çalışması ile bazı sıralı değerlerin atandığı veri tutuculardır.
         * print_r() : Bir dizinin insanlarca okunabilecek gösteriminin ekran çıktısını sağlamak için kullanılır.
         * Kurallar  : 
         * 1. Diziler array() fonksiyonu veya [] (köşeli parantez) ile oluşturulur.
         * 2. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde alfanumerik değerler (A-Z a-z 0-9) ve _ (alt çizgi) kullanılabilir.
         * 3. Dizi elemanlarına tanımlanacak olan anahtar isimleri içerisinde hiçbir zaman boşluk, Türkçe karakterler veya özel karakterler kullanılamaz
         * 4. Dizi elemanlarına tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılmaz.
         * 5. Dizi elemanlarına tanımlanacak olan anahtar isimleri büyük harf / küçük harf duyarlıdır.
         * 6. Dizi elemanlarına tanımlanacak olan anahtar isimleri aynı dizi içerisinde birden fazla kez kullanılmaz.
         * 7. Dizi elemanlarına anahtar isimleri tanımlanmayacak olursa, her bir dizi elemanı için anahtar isimleri otomatik olarak oluşturulur.
         *    Her bir eleman için otomatik oluşturulacak ANAHTAR isimleri rakamsal değerler alır ve bu değerler 0'dan başlayarak her bir eleman için bir artarak devam eder.
         * 
         * Yapısı    :
         * array(Anahtar kelime => Eleman, Anahtar kelime => Eleman, Anahtar kelime => Eleman ...)
         * array(Eleman, Eleman, Eleman ...)
         * 
         * Anahtar   : İlgili veriye veya veri gruplarına kolaylıkla erişimi sağlar.
         */
    

        // $isimler = array("Selim", "Tekin");

        // echo "<pre>"; // Daha net okuyabilmemiz için düzgün bir hale getirir.
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // echo $isimler[0] . "<br/>";
        // echo $isimler[1];


        
        // $isimler = array("Ad" => "Selim", "Soyad" => "Tekin", "Eğitim" => "PHP");

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // echo $isimler["Ad"] . "<br/>"; // "" içinde yazmazsak php bunu sabit olarak algılar ve hata verir.
        // echo $isimler["Soyad"] . "<br/>";
        // echo $isimler["Eğitim"];


        // Bu şekilde olursa Sehpa değerinden itibaren 0 anahtarı başlar.
        // $isimler = array("Renk" => "Mavi", "Sehpa", "Gemi", "Televizyon");

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";


        // Bu şekilde olursa Baştan 0 anahtarıyla başlar ve Eşya anahtarını atlayarak kaldığı yerden devam eder anahtarlar.
        // $isimler = array("Mavi", "Eşya" => "Sehpa", "Gemi", "Televizyon");

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // Çıktı : Array(
        //             [0] => Mavi
        //             [Eşya] => Sehpa
        //             [1] => Gemi
        //             [2] => Televizyon
        //         )

        // Bu şekilde olursa anahtarı olmayan indiste 0 anahtarı ile başlar ve anahtarı olmayanlara sırayla artarak anahtar verir.
        // $isimler = array("Renk" => "Mavi", "Eşya" => "Sehpa", "Gemi", "Eşya2" => "Televizyon", "Makas");

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // Çıktı : Array
        // (
        //     [Renk] => Mavi
        //     [Eşya] => Sehpa
        //     [0] => Gemi
        //     [Eşya2] => Televizyon
        //     [1] => Makas
        // )


        // $isimler = array("Re nk" => "Mavi"); // HATA, çalışmasına rağmen çoğu sunucu bu anahtar adını desteklemeyecektir. KESİNLİKLE KULLANILMAMALIDIR.

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // echo $isimler["Re nk"];


        // Sıra değişmez ama renk => Siyah olur
        // $isimler = array("renk" => "Mavi", "RENK" => "Sarı", "renk" => "Siyah");

        // echo "<pre>";
        // print_r($isimler);
        // echo "</pre><br/><br/>";

        // Çıktı : Array
        // (
        //     [renk] => Siyah
        //     [RENK] => Sarı
        // )
        

        $isimler = ["Ad" => "Selim", "Tekin"]; // Bu şekilde de dizi tanımlanabilir fakat önerilen array() fonksiyonunu kullanmaktır.

        echo "<pre>";
        print_r($isimler);
        echo "</pre><br/><br/>";
        
    ?>
</body>
</html>