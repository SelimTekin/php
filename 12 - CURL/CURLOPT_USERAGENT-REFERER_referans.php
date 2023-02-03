<?php

    // Hangi adresten geldiğimizi gösterir.
    $referans = $_SERVER["HTTP_REFERER"];

    if(!isset($referans)){
        echo "Sen bir botsun galiba";
    }
    else{
        echo $referans;
    }

?>