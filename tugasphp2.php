<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studi Kasus PHP 8</title>
</head>
<body>
    <form method="POST">
        <p>Form input nilai</p>
        <input type="nama" naem="nama" placeholder="Masukan nama"><br>
        <label>Matakuliah</label>
        <select name="matkul">
            <option>-----Pilih Matakuliah-----</option>
            <option value="HTML">HTML dan CSS</option>
            <option value="js">Javascript</option>
            <option value="UI">UI/UX</option>
            <option value="PHP">PHP</option>
        </select><br>
        <label>Nilai</label>

        <input type="text" name="nilai" placeholder="masukan nilai anda">
        <button name="proses" type="submit">Simpan</button>
    </form>
    <?php
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    $ket = ($nilai >= 60)? "lulus" : "gagal";
    if($nilai >= 85 && $nilai <= 100) $grade = "A";
    else if ($nilai >= 75 && $nilai <= 84) $grade = "B";
    else if ($nilai >= 60 && $nilai <= 74) $grade = "C";
    else if ($nilai >= 30 && $nilai <= 59) $grade = "D";
    else if ($nilai >= 0 && $nilai <= 29) $grade = "E";
    else $grade = "";

    switch ($grade) {
        case "A" : $predikat = "memuaskan"; break;
        case "B" : $predikat = "bagus"; break;
        case "C" : $predikat = "cukup"; break;
        case "D" : $predikat = "kurang"; break;
        case "E" : $predikat = "buruk"; break;
        default: $predikat = "";
    }
    if (isset($tombol)){
        echo 'Nama Mahasiswa : '.$nama;
        echo '<br>Matakuliah : '.$matakuliah;
        echo '<br>Nilai : '.$nilai;
        echo '<br>Keterangan : '.$ket;
        echo '<br>Grade : '.$grade;
        echo '<br>Predikat : '.$predikat;
    }
    ?>
</body>
</html>