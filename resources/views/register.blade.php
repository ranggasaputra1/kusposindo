<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>KUSPOSINDO | Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/floating-labels.css">
 <link href="css/styles.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet" >
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/style.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    
  </head>
<body style="background-color: #b46f32;">

<div id="card">
  <div id="card-content">
      <div id="card-title">

        <h2><a class="navbar-brand" href="#">
                <img src="img/logo.png" width="50"> 
            </a>Register</h2>
      </div>
	  
      <form action="/register" method="post" class="form-signin">
      	{{ csrf_field() }}


			<label class="inilabel">Nama Lengkap</label>
			 <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
        value="{{ old('name') }}">
			<div class="formlogin-border"></div>
			 @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

			<label class="inilabel"> Email</label>
			<input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}">
			<div class="formlogin-border"></div>
			 @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

			<label class="inilabel">Password</label>
			 <input type="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" >
			<div class="formlogin-border"></div>

        <center>
        <button type="submit" id="submit-btn" >Daftar</button><br>
        <a href="login" id="signup">Sudah memiliki akun? Login</a>
        </center>
      </form>
    </div>
  </div>
   </section>


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

	