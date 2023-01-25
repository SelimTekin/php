<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Dizisi</title>
</head>
<body>
    <?php
    
        $_SESSION["kullanici"] = array("Adi" => "Selim", "Soyadi" => "Tekin"); // 3 tane session oluşturduk. ( Evet kullanici da bir session oluyor :) )
        $_SESSION["sepet"]     = array("ID" => 12, "Tutari" => 1200.50, "paraBirimi" => "TL"); // Burada da 4 tane session var. Toplamda 7 tane session oldu.

        // echo "<pre>";
        // print_r($_SESSION);
        // print_r($_SESSION["kullanici]);
        // echo "</pre>";

        echo $_SESSION["sepet"]["Tutari"];
    
    ?>
</body>
</html>