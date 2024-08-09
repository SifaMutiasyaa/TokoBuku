<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Admin | Cipbookstrore</title>
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
    width:400px;
    min-height: 400px;
    border:1px solid #ccc;
    background-color: #ffffff;
    padding: 15px;
    box-sizing: border-box;
    }
    .box-login h1 {
    text-align:center;
    margin-bottom: 3px;
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
        <h1><b>DAFTAR ADMIN BARU</b></h1>
        <h1><img src="img/login.png" width="120px"><marquee direction="right"><b>CipBookStore</b></marquee></h1>
        <!-- elemen untuk membuat form yang akan dikirim ke halaman yang sama -->
        <form action="" method="POST">
            <input type="text" name="admin_name" placeholder="Nama admin baru" class="input-control">
            <input type="text" name="user" placeholder="Username baru" class="input-control">
            <input type="password" name="pass" placeholder="Password baru" class="input-control">
            <input type="submit" name="submit" value="Submit" class="btn btn-md btn-info" style="margin-bottom: 10px">
        </form>
        <?php
        if(isset($_POST['submit'])){
            include 'koneksi.php';
            $adminName = mysqli_real_escape_string($connection, $_POST['admin_name']);
            $user = mysqli_real_escape_string($connection, $_POST['user']);
            $pass = mysqli_real_escape_string($connection, $_POST['pass']);
            
            // Hash the password for security
            $hashedPass = md5($pass);

            // Check if the username already exists in the database
            $checkUsernameQuery = mysqli_query($connection, "SELECT * FROM tabel_admin WHERE username = '$user'");
            if(mysqli_num_rows($checkUsernameQuery) > 0){
                echo '<script>alert("Username already exists!")</script>';
            } else {
                // Insert the new admin into the database
                $insertQuery = mysqli_query($connection, "INSERT INTO tabel_admin (admin_name, username, password) VALUES ('$adminName', '$user', '$hashedPass')");
                if($insertQuery){
                    header("location: admin.php");
                    echo '<script>alert("Admin baru sukses ditambahkan!")</script>';
                } else {
                    echo '<script>alert("Admin baru gagal ditambahkan!")</script>';
                }
            }
        }
        ?>
    </div>
</body>
</html>
