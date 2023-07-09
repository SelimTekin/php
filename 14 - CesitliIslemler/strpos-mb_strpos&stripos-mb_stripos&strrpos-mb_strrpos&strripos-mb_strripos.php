<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>strpos()-mb_strpos()&stripos()-mb_stripos()&strrpos()-mb_strrpos()&strripos()-mb_strripos()</title>
</head>

<body>
   <?php
   /* strpos()    : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           mb_strpos() :  Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin belirtilecek olan karakter kodlaması dahilinde 
        gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           stripos()   : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük / küçük harf ayrımı olmaksızın ilk eşleşme
        sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           mb_stripos() : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük / küçük harf ayrımı olmaksızın, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak ilk eşleşme sonucundaki konumunu / sırasını bularak, değeri geriye döndürür.
           strrpos()    : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           mb_strrpos() :  Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin belirtilecek olan karakter kodlaması dahilinde 
        gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           strripos()   : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük / küçük harf ayrımı olmaksızın son eşleşme
        sonucundaki konumunu / sırasını bularak, bulduğu değeri geriye döndürür.
           mb_strripos() : Belirtilecek olan içerikte, belirtilecek olan herhangi bir değerin büyük / küçük harf ayrımı olmaksızın, belirtilecek olan karakter kodlaması dahilinde gelişmiş olarak son eşleşme sonucundaki konumunu / sırasını bularak, değeri geriye döndürür.*/


   $metin = "PHP tüm web tabanlı programlama dilleri arasında en yaygın olarak kullanılan bir dildir. PHP yazılım dili çok üstün özelliklere sahiptir. Selim Tekin bir PHP yazılımcısıdır.";

   echo $metin . "<br />";

   // strpos()
   // $sonuc = strpos($metin, "m", 8); // $metin stringi içerisinde m harfini ara ama ilk 7 karakteri es geç 8'den başla.

   // mb_strpos()
   // $sonuc = mb_strpos($metin, "programlama", 0, "UTF-8");    // $metin stringi içerisinde UTF-8 karakter kodlaması dahilinde e harfini ara. (3. parametreyi yazmadan karakter kodlaması belirtilemez hata verir. 3. parametre -> Kaçıncı indeksten sayılmaya başlanacağını gösterir.)(karakter kodlaması belirtilmezse dokümanın karakter kodlamasını baz alarak sayar.)



   // stripos()
   // $sonuc = stripos($metin, "SELIM"); // $metin stringi içerisinde SELIM'i büyük / küçük harf duyarlılığı olmadan ara.

   // stripos()
   // $sonuc = mb_stripos($metin, "E", 0, "UTF-8"); // $metin stringi içerisinde E harfini karakter kodlaması dahilinde büyük / küçük harf duyarlılığı olmadan ara.



   // strrpos()
   // $sonuc = strrpos($metin, "m", -25); // $metin stringi içerisinde m harfini sondan 25 karaktere yoksayarak tersten ara.
   
   // mb_strrpos()
   $sonuc = mb_strrpos($metin, "PHP", 0, "UTF-8"); // $metin stringi içerisinde PHP'yi tersten ve  karakter kodlaması dahilinde ara.



   // strripos()
   // $sonuc = strripos($metin, "PHP"); // $metin stringi içerisinde PHP'yi tersten ve büyük / küçük harf duyarlılığı olmadan ara.

   // mb_strripos()
   $sonuc = mb_strripos($metin, "PHP", 0, "UTF-8"); // $metin stringi içerisinde PHP'yi tersten ve  karakter kodlaması dahilinde büyük / küçük harf duyarlılığı olmadan ara.


   echo $sonuc;

   ?>
</body>

</html>