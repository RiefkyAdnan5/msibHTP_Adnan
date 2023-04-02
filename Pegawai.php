<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }

    public function setTunjab($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $tunjab = 15000000 * 0.2; break;
            case 'Asisten Manager': $tunjab = 10000000 * 0.2; break;
            case 'Kepala Bagian': $tunjab = 7000000 * 0.2; break;
            case 'Staff': $tunjab = 5000000 * 0.2; break;
            default: $tunjab;
        }
        return $tunjab;
    }

    public function setTunkel($jabatan, $status){
        $this->jabatan = $jabatan;
        $this->status = $jabatan;
        
        $tunkel = ($status == 'Menikah') ? $gapok * 0.025 : 0;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok;
        } : 
        return $gapok;
    }    

    public function cetak(){
        echo 'NIP Pegawai '.$this->nip;
        echo '<br>Nama Pegawai '.$this->nama;
        echo '<br>Jabatan '. $this->jabatan;
        echo '<br>Agama '.$this->agama;
        echo '<br>Status '.$this->status;
        echo '<br>Gaji Pokok Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan Rp. '.number_format($this->setTunjab($this->jabatan));
        echo '<hr>';

    }

}
?>