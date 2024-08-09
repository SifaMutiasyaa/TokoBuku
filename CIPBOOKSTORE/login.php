<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Cipbookstrore</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
     *{
    padding:0;
    margin:0;
    font-family: 'Quicksand', sans-serif;
    }
    h1{
        color: rgb(31, 64, 96);
    }
    body {
    background-color: #ebe4e4;
    } 
    #bg-login{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    }
    .box-login{
    width:300px;
    min-height: 300px;
    border:1px solid #ccc;
    background-color: #ffffff;
    padding: 20px;
    box-sizing: border-box;
    }
    .box-login h1 {
    text-align:center;
    margin-bottom: 10px;
    }
    .input-control{
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    box-sizing: border-box;
    }
    .box {
	background-color: #ececec;
	border:1px solid #ccc;
	padding:15px;
	box-sizing: border-box;
	margin:10px 0 25px 0;
     }
    .box:after {
	content: '';
	display: block;
	clear: both;
    }
    </style>
</head>
<body id="bg-login">
    <div class="box-login">
    <h1><b>LOGIN ADMIN</b></h1>
    <h1><img src="img/login.png" width="120px"><marquee direction="right"><b>CipBookStore</b></marquee></h1>
    <!-- elemen untuk membuat form yang akan dikirim ke halaman yang sama -->
    <form action ="" method="POST">
        <input type="text" name="user" placeholder="Username" class="input-control">
        <input type="password" name="pass" placeholder="Password" class="input-control">
        <input type="submit" name="submit" value="Login" class="btn btn-md btn-info" style="margin-bottom: 10px">
    </form>
    
    
    <?php
    if(isset($_POST['submit'])){ 
        session_start(); //menyimpan data dan mempertahankan keadaan login pengguna
        include 'koneksi.php'; 
        $_POST['pass']=md5($_POST['pass']);
        $user = mysqli_real_escape_string($connection, $_POST['user']);
        $pass = mysqli_real_escape_string($connection, $_POST['pass']);
        //validasi memeriksa user dan pass sesuai dengan yang ada di database
        $cek = mysqli_query($connection, "SELECT * FROM tabel_admin WHERE username = '".$user."' AND password = '".($pass)."'");
        if(mysqli_num_rows($cek) > 0){
        // untuk memeriksa query apakah mengembalikan setidaknya satu baris data yang cocok atau tidak
        $d = mysqli_fetch_object($cek);
        $_SESSION['status_login'] = true;
        header("location: home.php");
        exit(); 
        }else{
            //memkai script untuk memunculkan dialog pop-up
            echo '<script>alert("Username atau password Anda salah!")</script>';
        }

    }
    ?>
    </div>
</body>
</html>