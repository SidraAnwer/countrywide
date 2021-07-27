<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hello, world!</title>
    
  </head>
  <body style="background-color: #0A0518;width: 100%;height: 100%;">
    <div class="container-fluid">
      <div class="row px-5 mt-5">
        <div class="col-lg-6 col-md-6 col-sm-4 col-4">
          <img src="{{asset('assets/images/loginlogo.PNG')}}" style="width: 60px;height: 60px;" alt="">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-8 col-8 text-right">
          <span class="logintp1">Don't Have account? &nbsp <a class="logintp2" href="{{route('register')}}">Create Account</a></span>
        </div>
      </div>
      <form method="POST" action="{{ route('login') }}">
       @csrf
          <div class="row mt-5">
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 col-12 text-center">
          <img src="{{asset('assets/images/loginlogo.PNG')}}" style="width: 120px;height: 120px;" alt="">
          <h2 class="text-white mt-5">Welcome Back</h2>
        </div>
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 text-center  mt-5">
        <input type="email" name="email"  class="matinplogin" placeholder="Email">
        </div>
            <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 mt-3 text-center">
            <input type="password" class="matinplogin" name="password" placeholder="Password">
        </div>
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 mt-3">
            <div class="row">
            <div class="col-lg-6">
                <input type="checkbox" style="margin-left: 90px;">&nbsp<span class="logintp1">Remember me</span>
            </div>
            <div class="col-lg-6">
                <a class="logintp2 ml-4" href="">Forget Password?</a>
            </div>
            </div>
        </div>
        <div class="offset-lg-4 col-lg-4 offset-md-4 col-md-4 col-sm-12 mt-3 text-center">
            <button  type="submit"  class="btn logginmainbtn1">Login</button>
        </div>
      </div>
     </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>