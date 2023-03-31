<?php 
require 'Pegawai.php';

$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('01112','Adnan','Asisten Manager','Islam','Menikah');
$pegawai3 = new Pegawai('01113','Budi','Staff','Islam','Menikah');
$pegawai4 = new Pegawai('01114','Riefky','Kepala Bagian','Islam','Menikah');
$pegawai5 = new Pegawai('01115','Putra','Staff','Islam','Menikah');


$ar_pegawai = array($pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5);

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>