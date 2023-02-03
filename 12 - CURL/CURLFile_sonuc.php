<?php

    $gelenDosyaAdi        = $_FILES["Dosya"]["name"];
    $gelenDosyaTuru       = $_FILES["Dosya"]["type"];
    $gelenDosyaTempAdi    = $_FILES["Dosya"]["tmp_name"];
    $gelenDosyaHataDegeri = $_FILES["Dosya"]["error"];
    $gelenDosyaBoyutu     = $_FILES["Dosya"]["size"];

    $uzanti = substr($gelenDosyaAdi, -4); // sondan 4 karakteri alıyoruz.
    if($uzanti == "jpeg"){
        $uzantiOlustur = "." . $uzanti;
    }
    else{
        $uzantiOlustur = $uzanti;
    }
    $isim    = md5(uniqid(mt_rand()));  // dosya adını şifreledik.
    $olustur = $isim . $uzantiOlustur;

    if($gelenDosyaTuru == "image/png"){
        if(move_uploaded_file($gelenDosyaTempAdi, $olustur)){
            echo "Dosya başarılı bir şekilde yüklendi.";
            echo "<img src='" . $olustur . "'><br />";
            echo "Orijinal Dosya Adı : " . $gelenDosyaAdi . "<br />";
            echo "Yüklenen Dosya Adı : " . $olustur . "<br />";
            echo "Yüklenen Dosya Türü : " . $gelenDosyaTuru . "<br />";
            echo "Yüklenen Dosya Boyutu : " . $gelenDosyaBoyutu . "<br />";
        }
        else{
            echo "Dosya yükleme işlemi sırasında bir hata oluştu.";
        }
    }
    else{
        echo "Dosya yükleme işlemi sırasında istenmeyen bir dosya algılandı.";
    }

?>