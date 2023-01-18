<?php

/**
 * $_REQUEST : URL üzerinden veya istek gönderim tagları aracılığı ile gelen verilere ulaşılabilme imkanı tanır. Genellikle URL üzerinden gelen istekler,
 * kapalı yöntemle gelen istekler ve form işleme işlemleri için kullanılmaktadır. Kısacası $_GET ve $_POST super globallerinin yaptıklarını tek başına yapar.
 */

$gelenIsim    = $_REQUEST["isim"];
$gelenSoyisim = $_REQUEST["soyisim"];

echo $gelenIsim  . " " . $gelenSoyisim;
?>