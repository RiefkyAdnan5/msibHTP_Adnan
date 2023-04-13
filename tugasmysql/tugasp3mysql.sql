//Soal 2.1
//Tampilkan seluruh data produk diurutkan berdasarkan harga_jual mulai dari yang termahal
SELECT * FROM produk ORDER BY harga_jual DESC;
//Tampilkan data kode, nama, tmp_lahir, tgl_lahir dari table pelanggan
SELECT kode, nama_pelanggan, tmp_lahir,tgl_lahir from pelanggan;
//Tampilkan kode,nama,stok dari table produk yang stok-nya hanya 4
 SELECT kode, nama, stok FROM produk WHERE stok=4;
//Tampilkan seluruh data pelanggan yang tempat lahirnya Jakarta
SELECT * FROM pelanggan WHERE tmp_lahir='jakarta';
//Tampilkan kode, nama, tmp_lahir, tgl_lahir dari pelanggan diurutkan dari yang paling muda usianya
SELECT kode, nama_pelanggan, tmp_lahir, tgl_lahir fro
m pelanggan ORDER BY tgl_lahir DESC;

//Soal 2.2
//Tampilkan data produk yang stoknya 3 dan 10
 SELECT * FROM produk WHERE stok=3 OR stok=10;
//Tampilkan data produk yang harga jualnya kurang dari 5 juta tetapi lebih dari 500 ribu
SELECT * FROM produk WHERE harga_jual < 5000000 AND harga_jual > 500000;
//Tampilkan data produk yang harus segera ditambah stoknya
SELECT * FROM produk WHERE min_stok > stok;
//Tampilkan data pelanggan mulai dari yang paling muda
SELECT * FROM pelanggan ORDER BY tgl_lahir DESC;
//Tampilkan data pelanggan yang lahirnya di Jakarta dan gendernya perempuan
 SELECT * FROM pelanggan WHERE tmp_lahir='jakarta' AND jk='P';
//Tampilkan data pelanggan yang ID nya 2, 4 dan 6
SELECT * FROM pelanggan WHERE id IN (2,4,6);
//Tampilkan data produk yang harganya antara 500 ribu sampai 6 juta
SELECT * FROM produk WHERE harga_jual >= 500000 AND harga_jual <= 6000000;