<?php
session_start();

if(isset($_SESSION["kullanici"])){
    echo "Kontrol 2. Sayfa";
}
else{
    header("Location: CURLOPT_COOKIE-COOKIEJAR-COOKIEFILE.php");
    exit();
}

?>