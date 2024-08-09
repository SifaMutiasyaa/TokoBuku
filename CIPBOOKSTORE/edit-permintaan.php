<?php 
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tabel_bukusedikit WHERE id_buku = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

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

  <!-- =======================================================
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  ======================================================== -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   
</head>

  <body>

     <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="index.html"> 
    <img src="img/back.png" width=50px></a>
      <a href="https://instagram.com/cipbookstore.id?igshid=MzRlODBiNWFlZA=="> 
      <img src="img/rr.png" width="90px"></a>

      <h1 class="logo me-auto"><a href="pengguna.php"><marquee direction="right">Cipbookstore</marquee></a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
        <li><a href="pengguna.php">PRODUK</a><li>
        <li><a class="active" href="##">PERMINTAAN PRODUK</a><li>
        </ul>
    </div>
  </header><!-- End Header -->

  <br><br><br>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PENGADAAN BUKU
            </div>
            <div class="card-body">
              <form action="prosesedit-permintaan.php" method="POST">

              <input type="hidden" name="id_buku" value="<?php echo $row['id_buku'] ?>" placeholder="Masukkan Judul Buku" class="form-control">

                <div class="form-group">
                  <label>Judul Buku</label>
                  <input type="text" name="nama_buku" value="<?php echo $row['nama_buku'] ?>" placeholder="Masukkan Judul Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="number" required name="stok" value="<?php echo $row['stok'] ?>" placeholder="Masukkan Jumlah Buku" class="form-control">
                </div>
                
                 <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan penerbit Buku" class="form-control">
                </div>

                <div class="form-group">
                  <label>Permintaan oleh </label>
                  <select name="edit" value="<?php echo $row['edit'] ?>" class="form-control'">
                  <option >Admin</option>
                  <option selected>Pengguna</option>
                   </select>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br><br>

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
  </body>
  
</html>