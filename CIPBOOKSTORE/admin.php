<?php 
	session_start(); //memulai session pada php
	if($_SESSION['status_login'] != true){ //jika status login tidak bernilai true 
	header("Location: login.php"); //mengarahkan ke halaman login
	}
?>
<!-- jika if tidak terpenuhi akan lanjut akses ke halaman lain -->
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href= "style.css">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cipbookstore</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="https://instagram.com/cipbookstore.id?igshid=MzRlODBiNWFlZA=="> 
    <img src="img/rr.png" width="90px">

      <h1 class="logo me-auto"><a href="home.php"><marquee direction="right">Cipbookstore</marquee></a></h1>
    
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="home.php">HOME</a></li>
          <li><a class="active" href="admin.php">ADMIN</a></li>
          <li><a href="pengadaan.php">PENGADAAN</a></li>
          <li><a href="profil.php">PROFIL</a></li> 
          <li><a href="logout.php"> 
          <img src="img/logout.png" width=43px></a></li>
        </ul>
</nav>
  </header><!-- End Header -->
 <br><br><br>
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU
            </div>
            <div class="card-body">
            <a href="tambah-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                  <!-- scope="col" adalah atribut yang digunakan untuk menyatakan bahwa kolom tersebut adalah kolom header (column header) dalam tabel -->
                    <th scope="col">NO.BUKU</th> 
                    <th scope="col">KATEGORI</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">HARGA</th>
                    <th scope="col">STOK</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php'); //untuk menghubungkan ke database
                      $no = 1; //Variabel ini digunakan untuk menghasilkan nomor urut pada setiap baris data.
                      $query = mysqli_query($connection,"SELECT * FROM tabel_buku"); //untuk mengambil semua tabel data buku
                      while($row = mysqli_fetch_array($query)){ //mengulangi pembacaan data selama masih ada baris data dari hasil query
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['kategori'] ?></td>
                      <td><?php echo $row['nama_buku'] ?></td>
                      <td><?php echo $row['harga'] ?></td>
                      <td><?php echo $row['stok'] ?></td>
                      <td><?php echo $row['penerbit'] ?></td>
                      <td class="text-center">
                        <a href="edit-buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-buku.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA PENERBIT
            </div>
            <div class="card-body">
              <a href="tambah-PENERBIT.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID PENERBIT</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">KOTA</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tabel_penerbit");//mengambil semua data dari tabel data
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['kota'] ?></td>
                      <td><?php echo $row['telepon'] ?></td>
                     
                      <td class="text-center">
                        <a href="edit-penerbit.php?id=<?php echo $row['id_penerbit'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-penerbit.php?id=<?php echo $row['id_penerbit'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <br><br><br>
    <a href="daftaradmin.php" class="btn btn-md btn-info" style="margin-bottom: 10px">DAFTAR ADMIN BARU</a>

     <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 footer-contact">
            <h3>Cipbookstore</h3>
            <p>
             JL. Pemuda II Bandung Barat,JawaBarat,Indonesia <br>
              <strong>Phone:</strong> 0896-5776-7722<br>
              <strong>Email:</strong> Cipbookstore@gmail.com<br>
            </p>
          </div>

         
          
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Sifa Mutiasya</span></strong>. All Rights Reserved
        </div>
        </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
      <a href="https://www.facebook.com/profile.php?id=100004895658682" class="facebook"><i class="bx bxl-facebook"></i></a>
      <a href="https://wa.me/6289657767722" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      <a href="https://instagram.com/siff_mutiasya?igshid=MzRlODBiNWFlZA==" class="instagram"><i class="bx bxl-instagram"></i></a>
      <a href="https://www.linkedin.com/in/sifa-mutiasya-hendayana-puteri-130128247" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>