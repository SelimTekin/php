<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_COOKIE</title>
</head>
<body>
    <?php
    
        /**
         *$_COOKIE : Herhangi bir kullanıcının browser'ına yerleştirilmiş olan cookie (çerez) verilerine ulaşılabilme imkanı tanır.
         */

        // setcookie("Selim", "Php Eğitimi"); // cookie adı, cookie değeri

        $cerez = $_COOKIE["Selim"];

        // tarayıcı değişirse yazmaz çünkü çerezi içinde bulunduğumuz tarayıcıya yerleştiriyoruz.
        echo $cerez;

    ?>
</body>
</html>