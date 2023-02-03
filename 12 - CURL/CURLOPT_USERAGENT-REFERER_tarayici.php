<?php

    // Bulunduğumuz tarayıcıyı verir.
    $tarayici = $_SERVER["HTTP_USER_AGENT"]; // Burada hata vermesi normaldir. Çünkü biz bunu tarayıcıdan çağırmadık diğer sayfayı tarayıcıdan çağırdık.

    if(!isset($tarayici)){
        echo "Sen bir botsun galiba";
    }
    else{
        echo "Merhaba, Hoşgeldin";
    }

?>