<?php
require_once("ayar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çıkş Sayfası</title>
</head>
<body>
    <?php
    
        session_destroy();
        echo "<a href='formdanGelenVerilerleSessionTanimlama.php'>Forma Dön</a>";
    
    ?>
</body>
</html>