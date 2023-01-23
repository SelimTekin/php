<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sayfası</title>
</head>
<body>

    <?php
        // move_uploaded_file() : Herhangi bir dosyayı belirtilecek olan dizine yüklemek için kullanılır.
    ?>

    <!-- Dosya yükleyebilmek için mutalak post metodu kullanmalısın.
    enctype da eklemeliyiz ki formlarımızda dosya yüklememize müsade etmiş oluruz. -->
    <form action="sonucFile.php" method="post" enctype="multipart/form-data">
        Yüklenecek Olan Dosya : <input type="file" name="dosya"><br/>
        <input type="submit" value="Dosyayı Yükle">
    </form>
</body>
</html>