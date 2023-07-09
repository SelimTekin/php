<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zincirleme Metod</title>
</head>
<body>
    <?php
        class Hesap{

            private $sonuc = 0;

            function __construct($sayiDegeri){
                $this->sonuc = $sayiDegeri;
            }

            public function toplama($toplanacakDeger){
                $this->sonuc += $toplanacakDeger;
                return $this;
            }

            public function cikartma($cikarilacakDeger){
                $this->sonuc -= $cikarilacakDeger;
                return $this;
            }

            public function carpma($carpilacakDeger){
                $this->sonuc *= $carpilacakDeger;
                return $this;
            }

            public function bolme($bolunecekDeger){
                $this->sonuc /= $bolunecekDeger;
                return $this;
            }

            public function goster(){
                return $this->sonuc;
            }

        }

        $islemBir = new Hesap(100);

        echo $islemBir->toplama(25)->cikartma(50)->carpma(2)->bolme(8)->goster() . "<br />";

        $islemIki = new Hesap(300);
        echo $islemIki->bolme(2)->bolme(2)->bolme(5)->goster() . "<br />";

    ?>
</body>
</html>