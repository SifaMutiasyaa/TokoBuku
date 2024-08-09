<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku     = $_POST['id_buku'];
$kategori  = $_POST['kategori'];
$nama_buku = $_POST['nama_buku'];
$harga     = $_POST['harga'];
$stok      = $_POST['stok'];
$penerbit  = $_POST['penerbit'];

//query insert data ke dalam database
$query = "INSERT INTO tabel_buku (kategori, nama_buku, harga, stok, penerbit) VALUES ('$kategori', '$nama_buku', '$harga', '$stok', '$penerbit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman admin.php 
    header("location: admin.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>