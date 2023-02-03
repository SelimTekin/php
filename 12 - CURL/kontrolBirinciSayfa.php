<?php
session_start();

if(isset($_SESSION["kullanici"])){
    echo "Kontrol 1. Sayfa <br />";
}
else{
    header("Location: CURLOPT_COOKIE-COOKIEJAR-COOKIEFILE.php");
    exit();
}

?>