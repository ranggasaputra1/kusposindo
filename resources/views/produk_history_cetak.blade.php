<!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
                <meta name="description" content="" />
                <meta name="author" content="" /><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" /><!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <!-- cdn bootstrap4 -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <!-- css untuk select2 -->
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>KUSPOSINDO | Data Produk</title>
  </head>
  <body id="page-top">
  
<main>
      
<div class="container-fluid px-4">
<img src="img/logo.png" width="50"> <b class="ml-2" style="letter-spacing: 1px;" id="ini_huruf">KUSPOSINDO</b>
                                <h1 class=" container ">Produk</h1>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active container">Koperasi Usaha bersama Pos Indonesia</li>
                                </ol>
                               
                               
                <!-- tampilan-->
                 
                <table class="table table-bordered  container">
                                        <thead class="inithead">
                                        <tr style="text-transform: uppercase">
                                            <th style="text-align: center;">ID Produk</th>
                                            <th style="text-align: center;">Nama produk</th>
                                            <th style="text-align: center;">jumlah masuk</th>
                                            <th style="text-align: center;">tanggal masuk</th>
                                            <th style="text-align: center;">sisa produk</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach ($phc as $produk)
                                    <tr style="text-transform: uppercase">
                                            <td  style="text-align: center;">{{$produk->ID_produk}}</td>
                                            <td  style="text-align: center;">{{$produk->nama_produk}}</td>
                                            <td  style="text-align: center;">{{$produk->jumlah_masuk}}</td>
                                            <td  style="text-align: center;">{{$produk->tanggal_masuk}}</td>
                                            <td  style="text-align: center;">{{$produk->sisa_produk}}</td>
                                            </td> 
                                    </tr>
                                     @endforeach
                                   
     <script>
         window.addEventListener("load", window.print());
    </script>
           
            </body>
        </html>