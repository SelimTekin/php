<!DOCTYPE html>
<html lang="tr-TR"> <!--dil ve ülke-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Language" content="tr">
        <meta charset="utf-8">
        <title>İlk Sayfa</title>

        <!--css ve javascript kodları farklı bir dosyadan erişerek değil de bu şekilde de yazılabilir-->
        <!--<style>
            body{
                background-color: black;
                color: white;
            }
        </style>
        <script type="text/javascript" language="javascript">

            function deneme(){
                document.getElementById("islemAlani").innerHTML = "Merhaba";
            }
        </script>-->

        <link type="text/css" rel="stylesheet" href="style.css">
        <script type="text/javascript" language="javascript" src="javascript.js"></script>
    </head>
    <body>
        <?php
            echo "Selim Tekin\"in kodları<br/>"; // çift/tek tırnak sorunu çıkmasın diye \ kullandık \ -> kaçırma operatörü
        ?>
<?php echo <<<END
Merhaba
END;  
?>

        <?php
            $ornek = "ornek";

            echo 'Bu bir $ornek\'tir</br>'; // tek tırnak kullanıldığında değişkenler görülemez. Çıktı: Bu bir $ornek'tir
            echo "Bu bir {$ornek}'tir<br>"; // Böylr olmalı (okunaklı olması açısından {} kulanıldı)
        ?>

        <?php
            echo "Selim", " Tekin<br>";
            echo("Selim Tekin<br>");
            echo(65);
        ?>

        <!-- echo kısayolları -->
        <?="Selim Tekin"?>
        <?php $ornekTwo = "Deneme" ?>
        <?=$ornekTwo?>
        <input type="button" onClick="deneme();" value="İşlem Yap"><br/><br/>
        <div id="islemAlani"></div>
    </body>
</html>