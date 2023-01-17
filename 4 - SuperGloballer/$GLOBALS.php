<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GLOBALS</title>
</head>
<body>
    
    <?php

        /**
         * $GLOBALS : Atanacak olan değişken için kapsama / etki alanlarının değiştirilmesini sağlar. Bu sayede global(küresel) alanda
         * tanımlanmış bir değişkene local(yerel) alandan, local(yerel) alanada tanımlanmış bir değişkene global(küresel) alandan ulaşılabilme
         * imkanı tanır.
         */


        // İLK OLARAK GLOBAL ALANDAN LOCAL ALANA NASIL ERİŞİLİR ONA BAKALIM


        // $isim = "Selim Tekin";
        // echo $isim;           // sorunsuz yazar çünkü ikisi de global alanda

        // function deneme(){
        //     $isim = "Selim Tekin";
        // }
        // echo $isim;           // yazmaz çünkü değişken local alanda ve çağırıldığı yer (yani bu satır) global alanda.

        // function deneme(){
        //     $isim = "Selim Tekin";
        // }
        // deneme();
        // echo $isim;             // fonksiyonu çağırmamıza rağmen içindeki değişken local alanda olduğundan dolayı ekrana yazmaz ve hata verir.
        
        // function deneme(){
        //     $GLOBALS["isim"] = "Selim Tekin"; // artık global alanda kullanabiliriz bu değişkeni.(Tabii ki fonksiyonu dışarıda çağırarak)
        // }
        // deneme();
        // echo $isim;   
        // echo $GLOBALS["isim"];      // Bu şekilde de çağırılabilir.


        // ŞİMDİ DE LOCAL ALANDAN GLOBAL ALANA ERİŞİME BAKALIM

        // $GLOBALS["isim"] = "Selim Tekin";

        // function deneme(){
        //     echo $GLOBALS["isim"]; // global alandaki değişkene ulaşabilmemiz için $GLOBALS super globalini kullanmamız lazım.
        // }
        // deneme();

        // $isim = "Selim Tekin";

        // function deneme(){
        //     echo $GLOBALS["isim"]; // Bu şekilde de olur.
        // }
        // deneme();


        // Şimdilik dikkate alma fonksiyonlar anlatılırken göstereceğim.
        $isim = "Selim Tekin";

        function deneme(){
            global $isim;

            echo $isim; // Bir de bu var fakat fonksiyonlar klasöründe göstereceğim.
        }
        deneme();

    ?>

</body>
</html>