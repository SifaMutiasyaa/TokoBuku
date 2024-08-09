<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tabel_bukusedikit WHERE id_buku = '$id'";

if($connection->query($query)) {
    header("location: pengadaan-pengguna.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>