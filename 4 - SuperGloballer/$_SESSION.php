<?php

// Session'ların oluşturulabilmesi ve başlatılabilmesi için sayfanın en üstünde session'ın başlatılması gerekir.
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SESSION</title>
</head>
<body>
    <?php
    
        /**
         * $_SESSION : Herhangi bir kullanıcı için session(oturum) tanımlama imkanı tanır.
         * Ayrıca daha önceden tanımlanmış olan session verilerine de ulaşılabilme imkanı tanır.
         */

        // Session'lar xampp/temp klasörü içinde saklanır.
    
        $_SESSION["egitim"] = "php";            // Oturum adı, Değeri

        // Bunu yorum satırına alsam da session sonlanmadığı için temp klasöründe bulunduğu dosyada hala durur.
        // temp klasöründeki dosyadan değerini değiştirirsem hata verir. Çünkü dışarıdan müdahele edilemez.
        // Sonrasında sayfa yenilendiğinde session temp klasöründen silinir.
        // $_SESSION["email"] = "deneme@mail.com";

        echo "email adıyla tanımlı SESSION değeri : " . $_SESSION["email"];


    ?>
</body>
</html>