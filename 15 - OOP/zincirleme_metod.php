<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zincirleme Metod</title>
</head>
<body>
    <?php
        class Bicimlendir{

            public $yazi;
            public $stil;

            public function metin($metinDegeri){
                $this->yazi = $metinDegeri;
                return $this; // zincirleme metod kullanılırken bu şekilde parametre olan metodlarda return $this yazmazsak hata verir.
            }

            public function renk($renkDegeri){
                $this->stil = "color:" . $renkDegeri . "; ";
                return $this;
            }

            public function boyut($boyutDegeri){
                $this->stil .= "font-size:" . $boyutDegeri . ";";
                return $this;
            }

            public function olustur(){
                return "<div style='" . $this->stil . "'>" .  $this->yazi . "</div>";
            }

        }

        $sonuc = new Bicimlendir;

        echo $sonuc->metin("Selim Tekin")->renk("red")->boyut("20px")->olustur();
        echo $sonuc->metin("Selim Tekin")->renk("blue")->boyut("40px")->olustur();
    ?>
</body>
</html>