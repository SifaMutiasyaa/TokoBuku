<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_penerbit     = $_POST['id_penerbit'];
$nama  = $_POST['nama'];
$alamat = $_POST['alamat'];
$kota   = $_POST['kota'];
$telepon  = $_POST['telepon'];


//query insert data ke dalam database
$query = "INSERT INTO tabel_penerbit (nama, alamat, kota, telepon) VALUES ('$nama', '$alamat', '$kota', '$telepon')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman admin.php 
    header("location: admin.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>