<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
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
  <a href="https://instagram.com/cipbookstore.id?igshid=MzRlODBiNWFlZA==">
  <img src="img/rr.png" width="90px">
      <h1 class="logo me-auto"><a href="home.php"><marquee direction="right">Cipbookstore</marquee></a></h1>
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="home.php">HOME</a></li>
          <li><a href="admin.php">ADMIN</a></li>
          <li><a href="pengadaan.php">PENGADAAN</a></li>
          <li><a class="active"  href="profil.php">PROFIL</a></li>
          <li><a href="logout.php"> 
          <img src="img/logout.png" width=43px></a></li>
        </ul>


       
    </div>
  </header>
  <!-- End Header -->

 <br><br><br>

   <!-- isi halaman -->

<center>

<div class='avatar'>
  
  <img src="img/siff.jpg" width="250px">

   <table  cellpadding="7px" cellspacing="3px">
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td>Sifa Mutiasya Hendayana Puteri</td>
    </tr> 

    <tr>
      <td>Instansi</td>
      <td>:</td>
      <td>Universitas Islam Negeri Sunan Gunung Djati</td>
    </tr>

    <tr>
      <td>Program Studi</td>
      <td>:</td>
      <td>Teknik Informatika</td>
    </tr>
   
    <tr>
       <td>Alamat</td>
       <td>:</td>
       <td>Jl. Manisi Cibiru</td>
    </tr>

    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td>085846132431</td>
    </tr>

    <tr>
      <td> <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a></td>
      <td>:</td>
      <td>@sifamutiasya</td>
    </tr>

    <tr>
      <td> <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a></td>
      <td>:</td>
      <td>@sifamutiasya</td>
    </tr>

    <tr>
      <td> <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a></td>
      <td>:</td>
      <td>@Siff_mutiasya</td>
    </tr>
  </table>

</div>

</center>

 <!-- end isi halaman -->


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
              <strong>Email:</strong> cipbookstore@gmail.com<br>
            </p>
          </div>
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



<br><br><br>
