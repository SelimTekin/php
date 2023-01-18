<?php

/**
 * $_POST : İstek gönderim tagları aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle kapalı yöntemle gelen istekler ve
 * form işleme işlemleri için kullanılmaktadır.
 */

$ad    = $_POST["ad"];
$soyad = $_POST["soyad"];

echo $ad . " " . $soyad;

?>