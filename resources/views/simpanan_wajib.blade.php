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


     <!-- cdn bootstrap4 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <!-- css untuk select2 -->
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>KUSPOSINDO | Simpanan Wajib</title>
  </head>
  <body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light  fixed-top " id="mainNav" style="background-color: #fafad2;">
  <div class="container">

      <!--- logo --->
      <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50"> <b class="ml-2" style="letter-spacing: 1px;" id="ini_huruf">KUSPOSINDO</b>
            </a>
         <!-- garis tiga    -->
    <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   <!-- isi nav  -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav menu">
        <li class="nav-item ">
          <a class="nav-link  " aria-current="page" href="admin">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="anggota">Anggota</a>
        </li>
             <div class="dropdown">
  <button class="btn dropdown-toggle tombol" type="text" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false" style="color:black;">
    Simpanan
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="simpanan_pokok" style="color: black;">
    <button class="dropdown-item" type="button" >Pokok</button></a>
    <a href="simpanan_wajib" style="color: black;"><button class="dropdown-item active" type="button" style="background-color:#e67e22">Wajib</button></a>
    <a href="simpanan_sukarela" style="color: black;"><button class="dropdown-item" type="button">Sukarela</button></a>
  </div>
</div>
            <li class="nav-item">
          <a class="nav-link" href="jasa_usaha">Jasa Usaha</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kredit">Kredit</a>
        </li>
       
             <div class="dropdown">
  <button class="btn dropdown-toggle tombol" type="text" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false" style="color:gray;">
    History
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <a href="pokok_history" style="color: black;">
    <button class="dropdown-item" type="button">Simpanan Pokok</button></a>
    <a href="wajib_history" style="color: black;"><button class="dropdown-item" type="button">Simpanan Wajib</button></a>
    <a href="sukarela_history" style="color: black;"><button class="dropdown-item" type="button">Simpanan Sukarela</button></a>
    <a href="jasa_history" style="color: black;"><button class="dropdown-item" type="button">Jasa Usaha</button></a>
    <a href="produk_history" style="color: black;"><button class="dropdown-item" type="button">Produk</button></a>
    <a href="kredit_history" style="color: black;"><button class="dropdown-item" type="button">Kredit</button></a>
  </div>
</div>



        <li class="nav-item">
          <a class="nav-link" href="logout" onclick="return confirm('Apakah Anda Yakin Akan Logout')">logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main>
    <br><br><br>
<!-- judul  -->
                    <div class="container-fluid px-4">
                                <h1 class="mt-4 container " style="text-align:left">Anggota | Simpanan Wajib</h1>
                                    <p class=" container ">Koperasi Usaha bersama Pos Indonesia</p>
                                <div class="container text-container anggota"><a href="#"><button class="initombol " data-toggle="modal" data-target="#exampleModalLong">Tambah | Bayar</button></a></div>
                                <!-- Modal -->
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Simpanan Wajib</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                    <div class="modal-body">
                        <form method="post" action="simpanan_wajib/add">
                        {{ csrf_field() }}
                        <div class="form-group has-warning"><label >ID simpanan wajib</label>
                            <input type="number" class="form-control" name="ID_simpanan_wajib" placeholder="Sudah diisi Otomatis" readonly>
                            </div>
                            
                            <div class="form-group">
                  <label>Anggota</label >
                  <select class="form-control" id="search_anggota" name="ID_anggota" data-width="100%">
                      <option value=""></option>
                      @foreach ($anggotass as $anggota)
                      <option value="{{$anggota->ID_anggota}}  |  ( {{$anggota->nama_anggota}} )" > {{$anggota->ID_anggota}}  |  ( {{$anggota->nama_anggota}} )</option>
                      @endforeach
                      </select>
                    </div>

                   
                        

                            <div class="form-group has-warning"><label >Tanggal Bayar</label>
                            <input type="date" class="form-control" name="tanggal_bayar_wajib" required>
                            </div>

                            <div class="form-group has-warning"><label >Nominal</label>
                            <input type="text" class="form-control" name="nominal_wajib" value="50.000" readonly>
                            </div>

                            <div class="form-group has-warning"><label >Jumlah</label>
                            <input type="number" class="form-control" name="jumlah_wajib" required>
                            </div>

                        
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>

                <br> <br>
                @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
     @endif
                            <!-- tabel  -->
                                       <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-table me-1"></i>
                                        DataTable Simpanan Wajib | KUSPOSINDO
                                    </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                        <thead>
                                         <br>
                                        <tr style="text-transform: uppercase">
                                                    <th style="text-align: center;">ID Simpanan Wajib</th>
                                                    <th style="text-align: center;">ID Anggota</th>
                                                    <th style="text-align: center;">Tanggal Bayar</th>
                                                    <th style="text-align: center;">Nominal</th>
                                                    <th style="text-align: center;">Jumlah</th>
                                                    <th colspan="2" style="text-align: center;">Opsi</th>
                                                </tr>
                                            </thead>
                                       
                                            <tbody>
                                            @foreach ($simpanan_wajibb as $sw)
                                            <tr style="text-transform: uppercase">
                                                    <td style="text-align: center;">{{$sw->ID_simpanan_wajib}}</td>
                                                    <td style="text-align: center;">{{$sw->ID_anggota}}</td>
                                                    <td style="text-align: center;">{{$sw->tanggal_bayar_wajib}}</td>
                                                    <td style="text-align: center;">{{$sw->nominal_wajib}}</td>
                                                    <td style="text-align: center;">{{$sw->jumlah_wajib}}</td>

                                                    <td> <center> <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#ubahsimpanan_wajib{{$sw->ID_simpanan_wajib}}">
                                Edit</button></center>
                                <div class="modal fade" id="ubahsimpanan_wajib{{$sw->ID_simpanan_wajib}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">


                                        <h4 class="modal-title">Edit Data Simpanan Wajib</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body" style="text-align: left">
                                        <form method="post" action="simpanan_wajib/update">
                                        @csrf
                                        <div class="form-group has-warning"><label >ID simpanan wajib</label>
                            <input type="number" class="form-control" name="ID_simpanan_wajib" value="{{$sw->ID_simpanan_wajib}}" readonly>
                            </div>
                            
                            <div class="form-group has-warning"><label >Anggota</label>
                            <input type="text" class="form-control" name="ID_anggota" value="{{$sw->ID_anggota}}" readonly>
                            </div>

                            

                            <div class="form-group has-warning"><label >Tanggal Bayar</label>
                            <input type="date" class="form-control" name="tanggal_bayar_wajib" value="{{$sw->tanggal_bayar_wajib}}" required>
                            </div>

                            <div class="form-group has-warning"><label >Nominal</label>
                            <input type="text" class="form-control" name="nominal_wajib" value="{{$sw->nominal_wajib}}" required>
                            </div>

                            <div class="form-group has-warning"><label >Jumlah</label>
                            <input type="number" class="form-control" name="jumlah_wajib" value="{{$sw->jumlah_wajib}}" required>
                            </div><br>
                            <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" onclick="return confirm('Apa Anda Yakin Akan Memperbarui Data?')">Save</button>
                        </form>
                    </div>
                                        </form>
                                    </div>
                                        </td>
                                        <td > <center>
                            <a href="simpanan_wajib/hapus/{{$sw->ID_simpanan_wajib}}"  type="button " class="btn btn-outline-danger" onclick="return confirm('Apa Anda Yakin Akan Menghapus Data?')" style="text-transform: none">
                            Hapus</i></a></center>
                            </td>
                            </tr>
                                                @endforeach
                                            </tbody> 

                                        
                                        

                                        
                                        </table>
                        </main>
                        <!-- footer  -->
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
 <br>
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
        
        <script type="text/javascript">
 $(document).ready(function() {
     $('#search_anggota').select2();
 });
</script>
  </body>
</html>
