<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crypt()</title>
</head>
<body>
    <?php
    
        /**
         * crypt() : Belirtilecek olan içeriğin tek yönlü gelişmiş bir şekilde şifrelemesini yaparak, şifrelediği değeri geriye döndürür.
         */
    

        // $deger   = "Selim Tekin";
        // $olustur = crypt($deger); // Hata kodu döndürür, çünkü salt (tuz) kullanılmadı.
        // echo $olustur;

        // $deger   = "Selim Tekin";
        // $olustur = crypt($deger, "St"); // 2 karakterlik salt (tuz) kullanılmış DES şifrelemesi.
        // echo $olustur;

        // $deger   = "Selim Tekin";
        // $olustur = crypt($deger, "_Stekin57"); // 9 karakterlik salt (tuz) kullanılmış DES şifrelemesi.( _ (alt çizgi) ile başlamalı )
        // echo $olustur;

        // ( $1$ ile başlar $ ile biter. Ayrıca $ olduğu için değişken olarak algılamasın diye tek tırnak kullan )
        $deger   = "Selim Tekin";
        $olustur = crypt($deger, '$1$Selteki_$'); // 12 karakterlik salt (tuz) kullanılmış MD5 şifrelemesi.
        echo $olustur;

        // $deger   = "Selim Tekin";
        // $olustur = crypt($deger, "S"); // Hatalı salt. Çıktı : *0 olur
        // echo $olustur;

        // $deger   = "Selim Tekin";
        // $olustur = crypt($deger, "Stdöşlmslşgmşs"); // Salt, ya 2 ya 9 ya da 12 karakterden oluşur. Bunların haricinde bi uzunlukta yazarsan daima ilk 2 karakteri alır.
        // echo $olustur;
    ?>
</body>
</html>