<?php
require_once 'Lingkaran.php';
require_once 'persegipanjang.php';
require_once 'segitiga.php';

$b1 = new Lingkaran();
$b2 = new persegipanjang();
$b3 = new segitiga();

$ar_bidang = [$b1,$b2,$b3];
foreach($ar_bidang as $bidang){
    echo '<br>'.$bidang->luasBidang();
    echo '<br>'.$bidang->kelilingBidang();
}

?>