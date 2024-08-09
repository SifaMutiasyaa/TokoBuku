<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tabel_penerbit WHERE id_penerbit = '$id'";

if($connection->query($query)) {
    header("location: admin.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>