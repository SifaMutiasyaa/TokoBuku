<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_penerbit    = $_POST['id_penerbit'];
$nama  = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota     = $_POST['kota'];
$telepon      = $_POST['telepon'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tabel_penerbit SET nama = '$nama', alamat= '$alamat', kota = '$kota', telepon = '$telepon' WHERE id_penerbit = '$id_penerbit'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman admin.php 
    header("location: admin.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>