<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unset()</title>
</head>
<body>
    <?php
        /* unset() : Belirtilecek olan değişkeni, dizi anahtarını ve elemanını veya session'ı (oturumu) silmek / yok etmek için kullanılır.*/

        // DEĞİŞKENLER

        // $isim = "Selim";
        // $soyisim = "Tekin";
        // echo $isim . " " . $soyisim;

        // unset($isim, $soyisim);
        // echo $isim . " " . $soyisim; // Hata kodu döndürür, çünkü unset() metodu ile isim ve soyisim adındaki değişkenler yok edildi.

        //DİZİLER

        // $arr = array("isim" => "selim", "soyisim" => "tekin", "sehir" => "istanbul");

        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";

        // unset($arr["soyisim"], $arr["sehir"]);
        // // unset($arr);        // Bu şekilde tüm diziyi silmiş oluruz.

        // echo "<pre>";
        // print_r($arr);
        // echo "</pre>";


        // SESSION

        $_SESSION["kullanici"] = "Selim";
        $_SESSION["email"] = "selim@mail.com";

        echo $_SESSION["kullanici"] . "<br />";
        echo $_SESSION["email"] . "<br /><br />";

        unset($_SESSION["kullanici"], $_SESSION["email"]);
        // unset($_SESSION);   // Bu şekilde $_SESSION global değişkenini silmiş oluruz. VAR OLAN SESSIONLARI DEĞİL !!!

        echo $_SESSION["kullanici"] . "<br />";
        echo $_SESSION["email"] . "<br />";
    ?>
</body>
</html>