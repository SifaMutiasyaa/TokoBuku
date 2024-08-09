<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "sifa141004";
$db_name = "data";    
//untuk melakukan koneksi ke database mysql
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    echo "";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}
?>