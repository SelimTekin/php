<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>printf() & sprintf()</title>
</head>
<body>
    <?php
        /* printf()  : Belirtilecek olan içeriğin, biçimli bir yapıya göre ekran çıktılanmasını sağlamak için kullanılır.
           sprintf() : Belirtilecek olan içeriğin, biçimli bir yapıya göre yeni bir değişken içerisine depolanmasını sağlamak için kullanılır.
         */

        // printf("Selim Tekin");
        
        // $deger = sprintf("Selim Tekin");
        // echo $deger;


        // printf("%"); // Hata kodu döndürür, çünkü dizge istek talebi belirtilmedi.( sprintf() için de geçerlidir. % yazabilmek için 2 tane yazmalısın)


        // $ad    = "Selim";
        // $soyad = "Tekin";
        // printf("Hoşgeldiniz %s %s Bey", $ad, $soyad);


        // $deger = "Merhaba nasılsınız %s %s Bey"; // Tam tersi de olabiliyor görüldüğü üzere
        // printf($deger, "Selim", "Tekin");


        // $deger = "Selim Tekin";
        // printf("Merhaba %0.3s Bey", $deger); // Bu şekilde uzunluk belirtebiliyoruz.

        
        // $deger = 99.99;
        // printf("Tutar %+d TL", $deger); // %d -> Sayı float olsa dahi tam sayı olarak gösterir. Sayı pozitifse başına + yazdığında + işaretini gösterir. Eksi'yi (-) zaten göstriyor.


        // $deger = 99;
        // printf("Tutar %0.4f TL", $deger); // 0.4 ya da 1.4 -> virgülden sonra kaç hanenin gösterileceğini belirtir. Tam sayı olsa dahi dört tane 0 yazar. Varsayılan olarak virgülden sonra 6 hane vardır. f yerine F yazarsan tarayıcı dili ne ise ona göre nokta veya virgül yazar ondalık haneden önce. Türkçe'de nokta yazıyoruz İngilizce'de virgül yazar.


        // $deger = 65;
        // printf("65 kodunun ASCII tablosundaki karşılığı: %c", $deger);  // %c -> ASCII tablosundaki karşılığı verir.


        // $deger = 2002;
        // printf("2002 Sayısının Binary (İkilik) Sayı Sistemi Karşılığı: %b", $deger); // Binary karşılığı verir. Ama başta 0 varsa yazmaz.


        // $deger = 2002;
        // printf("2002 Sayısının Octal (Sekizlik) Sayı Sistemi Karşılığı: %o", $deger); // Octal karşılığı verir.


        // $deger = 2002;
        // printf("2002 Sayısının Hexadecimal (On Altılık) Sayı Sistemi Karşılığı: %x", $deger); // Hexadecimal karşılığı verir. X yazarsak harfsel değerler büyük harf olur.


        // $deger = 2002;
        // printf("2002 Sayısının Bilimsel Gösterimi: %e", $deger); // Sayının bilimsel gösterimini verir. E yazarsak e harfi büyük yazar. e'nin önündeki sıfırların bir değeri yok.


        // $deger = 2.002000E+3;
        // printf("2002 Sayısının Bilimsel Gösterimi: %g", $deger); // Bilimsel gösterilen sayının orijinalini verir.


        // $deger = "PHP";
        // printf("%'A10s", $deger); // %' -> Değerin kaç karakterle doldurulacağı belirtilir. (Burada PHP ile birlikte 10 karakter var. Çıktı: AAAAAAAPHP). String olduğu için s yazdık.

        // $deger = "PHP";
        // printf("%-'A10s", $deger); // %' -> Değerin kaç karakterle doldurulacağı belirtilir. (Burada PHP ile birlikte 10 karakter var. Fakat bu sefer PHP solda kalır. Çıktı: PHPAAAAAAA). A veya herhangi bir şey yazmazsan boşluk ile doldurulur. String olduğu için s yazdık.

        // $deger = 8;
        // printf("%'A10d", $deger); // %' -> Değerin kaç karakterle doldurulacağı belirtilir. (Burada 8 ile birlikte 10 karakter var. Fakat bu sefer 8 solda kalır. Çıktı: PHPAAAAAAA). A veya herhangi bir şey yazmazsan boşluk ile doldurulur. Integer olduğu için d yazdık.

        // $deger = 8;
        // printf("%-'A10d", $deger); // %' -> Değerin kaç karakterle doldurulacağı belirtilir. (Burada 8 ile birlikte 10 karakter var. Fakat bu sefer 8 solda kalır. Çıktı: PHPAAAAAAA). A veya herhangi bir şey yazmazsan boşluk ile doldurulur. Integer olduğu için d yazdık.


        $degerBir  = 1;
        $degerIki  = 10;
        $degerUc   = 100;
        $degerDort = 1000;
        $degerBes  = 10000;

        printf("%d", $degerBir);
        echo "<br />";
        printf("%d", $degerIki);
        echo "<br />";
        printf("%d", $degerUc);
        echo "<br />";
        printf("%d", $degerDort);
        echo "<br />";
        printf("%d", $degerBes);

        echo "<br /><br /><br />";

        printf("%05d", $degerBir); // 0 ile doldurarak 5 karaktere tamamlar.
        echo "<br />";
        printf("%05d", $degerIki);
        echo "<br />";
        printf("%05d", $degerUc);
        echo "<br />";
        printf("%05d", $degerDort);
        echo "<br />";
        printf("%05d", $degerBes);
        echo "<br />";
    ?>
</body>
</html>