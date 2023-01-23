<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çoklu Dosya Yükleme</title>
</head>
<body>

    <!-- multiple yazarak birden fazla dosya seçebiliriz. Yoksa tek bir tane seçebiliriz. -->
    <form action="sonucCokluFile.php" method="post" enctype="multipart/form-data">
        Dosya : <input type="file" name="Dosyalar[]" multiple><br/> <!-- Dizi şeklinde göndermemiz lazım -->
        <input type="submit" value="Dosya Yükle">
    </form>
</body>
</html>