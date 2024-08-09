<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku    = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$stok      = $_POST['stok'];
$penerbit  = $_POST['penerbit'];
$edit     = $_POST['edit'];
//query update data ke dalam database berdasarkan ID
$query = "UPDATE tabel_bukusedikit SET nama_buku= '$nama_buku', stok = '$stok', penerbit = '$penerbit', edit = '$edit' WHERE id_buku = '$id_buku'";
//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    header("location: pengadaan-pengguna.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>