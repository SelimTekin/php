<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Files</title>
</head>
<body>

    <!-- Çok parçacıklı dosya gönderiminde mutlaka post methodu seçilmeli. get ile gönderilemez. Çok parçacıklı demek birden fazla dosya demek değildir.
         Çok parçacıklı dosya deniyor dosya yükleme işlemlerine-->
    <form action="$_FILES.php" method="post" enctype="multipart/form-data"> <!-- enctype muhakkak yazılmalı yoksa dosya yüklenmesine müsade edilmez. -->

        Seçiniz : <input type="file" name="dosya">
        <input type="submit" value="Dosyayı Gönder">

    </form>
</body>
</html>