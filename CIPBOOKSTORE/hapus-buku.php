<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tabel_buku WHERE id_buku = '$id'";

if($connection->query($query)) {
    header("location: admin.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>