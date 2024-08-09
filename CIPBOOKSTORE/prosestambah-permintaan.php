<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_buku     = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$stok      = $_POST['stok'];
$penerbit  = $_POST['penerbit'];
$edit  = $_POST['edit'];

//query insert data ke dalam database
$query = "INSERT INTO tabel_bukusedikit (nama_buku, stok, penerbit, edit) VALUES ('$nama_buku', '$stok', '$penerbit', '$edit')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman pengadaan.php 
    header("location: pengadaan-pengguna.php");
    
} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>