<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Rincian Gaji Pegawai</h2>
    <form method="POST">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" required><br>

        <label for="jabatan">Pilih Jabatan : </label>
        <select name="jabatan">
        <option value="Manager">Manager</option>
        <option value="Asisten">Asisten</option>
        <option value="Kabag">Kabag</option>
        <option value="Staff">Staff</option>
        </select>

        <br><label for="">Jumlah Anak : </label>
        <input type="number" name="jml_anak" required>

        <br><input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $jml_anak = $_POST['jml_anak'];

        if($jabatan == 'Manager') $gaji_pokok = 20000000;
        else if ($jabatan == 'Asisten') $gaji_pokok = 15000000;
        else if ($jabatan == 'Kabag') $gaji_pokok = 10000000;
        else if ($jabatan == 'Staff') $gaji_pokok = 4000000;

        if($jml_anak <= 2) $tunjangan_klg = $gaji_pokok * 0.05;
        else if ($jml_anak > 2 && $jml_anak <= 5) $tunjangan_klg = $gaji_pokok * 0.1;

        $tunjangan_jbt = $gaji_pokok * 0.2;
        $total = $gaji_pokok + $tunjangan_klg + $tunjangan_jbt;
        $zakat = ($total >= 6000000) ? $total * 0.025 : 'null' ;
        $gaji_bersih = $total - $zakat;


        echo 'Nama : '.$nama;
        echo '<br>Jabatan : '.$jabatan;
        echo '<br>Gaji Pokok : '.$gaji_pokok;
        echo '<br>Tunjangan Jabatan : '.$tunjangan_jbt;
        echo '<br>Tunjangan Keluarga : '.$tunjangan_klg;
        echo '<br>Gaji Kotor : '.$total;
        echo '<br>Zakat Profesi : '.$zakat;
        echo '<br>Take Home Pay : '.$gaji_bersih;
    }
    ?>
</body>
</html>