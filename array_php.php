<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Adnan', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Ani', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Aji', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$jumlah_mhs = count($mahasiswa);
$jml_nilai = array_column($mahasiswa, 'nilai');
$tertinggi = max($jml_nilai);
$terendah = min($jml_nilai);
$rata2 = array_sum($jml_nilai) / $jumlah_mhs;
$keterangan_mhs = [
    'Jumlah Mahasiswa' => $jumlah_mhs,
    'Nilai Tertinggi' => $tertinggi,
    'Nilai Terendah' => $terendah,
    'Rata rata nilai' => $rata2
]
/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case



*/
?>

<table border="1px" width="100%" bgcolor="blue">
<thead>
    
    <tr>
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
<?php
$no = 1;
foreach($mahasiswa as $mhs){
$ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
//grade 
if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
else if ($mhs['nilai']>= 75 && $mhs['nilai'] <= 80) $grade = 'B';
else if ($mhs['nilai']>= 60 && $mhs['nilai'] <= 74) $grade = 'C';
else if ($mhs['nilai']>= 30 && $mhs['nilai'] <= 59) $grade = 'D';
else if ($mhs['nilai']>= 0 && $mhs['nilai'] <= 29) $grade = 'E';
else $grade = '';

switch ($grade){
    case "A" : $predikat = "memuaskan"; break;
    case "B" : $predikat = "Bagus"; break;
    case "C" : $predikat = "Cukup"; break;
    case "D" : $predikat = "Kurang"; break;
    case "E" : $predikat = "Buruk"; break;
    default: $predikat ="";
}
    ?>
    <tr>
        <td><?= $no ?> </td>
        <td><?= $mhs['NIM']?></td>
        <td><?= $mhs['nama']?></td>
        <td><?= $mhs['nilai']?></td>
        <td><?= $ket ?></td>
        <td><?= $grade?></td>
        <td><?= $predikat?></td>
</tr>
<?php $no++; } ?>
</tbody>
<tfoot>
<?php
    foreach($keterangan_mhs as $ketmhs =>$hasil){
?>
<tr>
    <th colspan="6"><?= $ketmhs ?></th>
    <th><?= $hasil ?></th>

    </tr>
<?php } ?>
</tfoot>
</table>