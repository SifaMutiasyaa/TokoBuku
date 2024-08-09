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

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tabel_buku SET kategori = '$kategori', nama_buku= '$nama_buku', harga = '$harga', stok = '$stok', penerbit = '$penerbit' WHERE id_buku = '$id_buku'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman admin.php 
    header("location: admin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>