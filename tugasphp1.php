<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <Table>
            <tr>
                <td>Alas : </td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi : </td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="hitung"></td>
            </tr>
        </Table>
    </form>

<?php 
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luasjajargenjang = $alas * $tinggi;
        $kelilingjajargenjang = (2 * ($alas + $tinggi));
        

        echo 'Hasil perhitungan Luas dan Keliling Jajar Genjang';
        echo '<br> Diketahui :';

        echo '<br> Maka Luasnya ' .$luasjajargenjang;
        echo '<br> Maka Kelilingnya ' .$kelilingjajargenjang;
    }
?>
</body>
</html>