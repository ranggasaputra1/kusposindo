<!DOCTYPE html>
<html lang="en">
    
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/tables.css">
    <link href="css/style" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


     <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">


     <!-- cdn bootstrap4 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <!-- css untuk select2 -->
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

 <!-- Css Animasi -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>KUSPOSINDO | Beranda Anggota</title>
  </head>
  <body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light  fixed-top " id="mainNav" style="background-color: #fafad2;">
  <div class="container">

      <!--- logo --->
      <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50"> <b class="ml-2" style="letter-spacing: 1px;" id="ini_huruf">KUSPOSINDO</b>
            </a>
         <!-- garis tiga    -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
   <!-- isi nav  -->
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav menu">
        <li class="nav-item ">
          <a class="nav-link active " aria-current="page" href="user">Beranda</a>
        <li class="nav-item">
          <a class="nav-link" href="logout" onclick="return confirm('Apakah Anda Yakin Akan Logout')">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main> <br> <br> <br> <br> <br>



<div class="background">
        <div class="container">
          <div class="row text-center mb-12">
            <div class="col">
              <h2><strong> BERANDA ANGGOTA</strong></h2>
            </div> <br><br>
          </div>
          <div class="row justify-content-center">
            <div class="col-sm-12">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/lagi.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

  <br><br>
  <div data-aos="fade-down" data-aos-duration="1200">
  <center>
  <p class="lead">Selamat Datang <b>{{ Auth::user()->name}}</b></p>
  <p >Klik tombol Dibawah ini untuk Infomasi Akun</p>
   <!-- Button trigger modal -->
    <button type="button" class="initombol" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Informasi Akun
    </button> <br><br><br>
    </center>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Informasi Akun</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group">
                    <label for="formGroupExampleInput"> ID</label>
                    <input type="text" class="form-control" value="{{{ Auth::user()->id}}}" readonly>
            </div>
            <div class="form-group">
                    <label for="formGroupExampleInput"> Nama</label>
                    <input type="text" class="form-control" value="{{{ Auth::user()->name}}}" readonly>

            </div>
            <div class="form-group">
                    <label for="formGroupExampleInput"> Email</label>
                    <input type="text" class="form-control" value="{{{ Auth::user()->email}}}" readonly>

            </div>
            <div class="form-group">
                    <label for="formGroupExampleInput"> Dibuat</label>
                    <input type="text" class="form-control" value="{{{ Auth::user()->created_at}}}" readonly>
  
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</main>
<div class="footer-basic">

<footer>
<div class="container">
<a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50"> <b class="ml-2 tulisan2" style="letter-spacing: 1px;" >Alamat Kantor</b>
            </a>
<p> <address> Jl. Banda No.30, Citarum, Kec. Bandung Wetan, Kota Bandung, Jawa Barat 40115, Pos Indonesia Lt.1 </address></p>
    <p class="textcontent"> <a href="#" class="textcontent" target="_blank"> Koperasi Usaha Bersama Pos Indonesia</a></p>
</div>

<div class="social">
    <a href="#"><i class="fab fa-whatsapp"></i></a>
    <a href="#"><i class="fab fa-facebook-f"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
</div>
<p class="copyright"> copyright  &copy;2022 | Copyright by Developer</p>

</footer>
</div>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
       
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <!-- js untuk bootstrap4  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
        <!-- js untuk select2  -->
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

         <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
     AOS.init({
        once: true,
      });
  </script>

   
  </body>
</html>


