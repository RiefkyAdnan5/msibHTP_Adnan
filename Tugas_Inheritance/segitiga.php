<?php
require_once 'Abstract1.php';
class segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    public $sisi;
    public function __construct($alas, $tinggi, $sisi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }
    public function namaBidang(){
        echo "segitiga";
    }
    public function luasBidang(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }
}

?>