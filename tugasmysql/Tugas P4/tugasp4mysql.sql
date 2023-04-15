//Soal 3.1
//Tampilkan produk yang asset nya diatas 20jt
SELECT * FROM produk WHERE harga_beli * stok > 20000000;
//Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT SUM(stok - min_stok) as selisih from produk;
//Tampilkan total asset produk secara keseluruhan
SELECT sum(stok) as total_asset from produk;
//Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004;
//Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir)=1998;
//Tampilkan data pelanggan yang berulang tahun bulan agustus
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir)=08;
//Tampilkan data pelanggan : nama, tmp_lahir, tgl_lahir dan umur (selisih tahun sekarang dikurang tahun kelahiran)
SELECT nama, tmp_lahir, tgl_lahir, (YEAR(NOW())-YEAR(tgl_lahir)) AS umur FROM pelanggan;

//Soal 3.2
//Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT COUNT(*) AS tgl_lahir FROM pelanggan WHERE (YEAR(tgl_lahir)) = 1998;
//Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT COUNT(*) AS tmp_lahir FROM pelanggan WHERE jk = 'P';
//Berapa jumlah total stok semua produk yang harga jualnya dibawah 10rb
SELECT SUM(stok) AS total_stok FROM produk WHERE harga_jual < 10000;
//Ada berapa produk yang mempunyai kode awal K
SELECT COUNT(*) AS Produk_k FROM produk WHERE nama LIKE 'K%';
//Berapa harga jual rata-rata produk yang diatas 1jt
SELECT AVG(harga_jual) AS Harga_jual_rata FROM produk;
//Tampilkan jumlah stok yang paling besar
SELECT MAX(stok) AS stok_terbanyak FROM produk;
//Ada berapa produk yang stoknya kurang dari minimal stok
SELECT COUNT(*) AS Jumlah_stok FROM produk WHERE stok < min_stok;
//Berapa total asset dari keseluruhan produk
SELECT SUM(harga_beli * stok) as total from produk;

//Soal 3.3
//Tampilkan data produk : id, nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi ‘segera belanja’ jika tidak ‘stok aman’.
 SELECT id, nama, stok,
    -> CASE
    -> WHEN stok = min_stok THEN 'segera belanja'
    -> WHEN stok < min_stok THEN 'segera belanja'
    -> ELSE 'stok aman'
    -> END AS keterangan
    -> FROM produk;
//Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 → ‘muda’ , 17-55 → ‘Dewasa’, selainnya ‘Tua’
 SELECT id, nama_pelanggan, umur,
    -> CASE
    -> WHEN umur < 17 THEN 'muda'
    -> WHEN umur > 17 THEN 'Dewasa'
    -> ELSE 'tua'
    -> END AS Kategori_umur
    -> FROM pelanggan;
//Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘TV01’ →’DVD Player’ , ‘K001’ → ‘Rice Cooker’ selain dari diatas ‘Tidak Ada’
SELECT id, kode, nama,
    -> CASE
    -> WHEN kode = 'TV01' THEN 'DVD Player'
    -> WHEN kode = 'K001' THEN 'Rice Cooker'
    -> ELSE 'tidak ada'
    -> END AS Bonus
    -> FROM produk;

//soal 3.4
//Tampilkan data statistik jumlah tempat lahir pelanggan

//Tampilkan jumlah statistik produk berdasarkan jenis produk

//Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan

//Tampilkan data produk yang harganya diatas rata-rata harga produk

//Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb

//Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan

//Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3%