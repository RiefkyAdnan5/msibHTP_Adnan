//query dibawah untuk membuat table produk
 CREATE TABLE produk(
    -> id int NOT NULL auto_increment primary key,
    -> kode varchar(10) unique,
    -> nama varchar(45),
    -> harga_beli double default 0,
    -> harga_jual double default 0,
    -> stok int,
    -> min_stok int,
    -> jenis_produk_id int NOT NULL references jenis_produk(id));
//query dibawah untuk membuat table pesanan_items
 CREATE TABLE pesanan_items(
    -> id int NOT NULL auto_increment primary key,
    -> produk_id int NOT NULL references produk(id),
    -> pesanan_id int NOT NULL references pesanan(id),
    -> qty int,
    -> harga double default 0);
//query dibawah untuk membuat table vendor
 CREATE TABLE vendor(
    -> id int NOT NULL auto_increment primary key,
    -> nomor varchar(4) unique,
    -> nama varchar(40),
    -> kota varchar(30),
    -> kontak varchar(30));
//query dibawah untuk membuat table pembelian
CREATE TABLE pembelian(
    -> id int NOT NULL auto_increment primary key,
    -> tanggal varchar(45),
    -> nomor varchar(10) unique,
    -> produk_id int NOT NULL references produk(id),
    -> jumlah int,
    -> harga double default 0);
//query dibawah untuk menambahkan field alamat
 ALTER TABLE pelanggan ADD alamat varchar(40);
//query dibawah untuk mengganti nama field beserta tipenya
ALTER TABLE pelanggan CHANGE nama nama_pelanggan varc
har(50);