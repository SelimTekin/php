<?php
    namespace Project;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>__NAMESPACE__</title>
</head>
<body>
    <?php
    
    /**
     * PHP dosyası içerisinde tanımlanmış olan namespace'in(isim uzayı), namespace adı bilgisi değerini döndürür.
     * namespaceler her zaman sayfanın en üstünde olmalıdır. Üzerinde herhangi bir kod olamaz.
     * namepace -> Birden fazla yazılımcı bir projede çalışıyorsa ve aynı sınıf adını kullanıyorlarsa geliştirme esnasında o zaman namespaceler altında sınıflarını yazarlar.
     * Yani farklı yazılımcıların kullandığı aynı isme sahip sınıflar çakışmayacaktır
     */

    $sonuc = __NAMESPACE__;
    echo $sonuc;
    
    ?>
</body>
</html>