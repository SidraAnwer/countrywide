<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Hello, world!</title>
    
  </head>
  <body>
    <div class="s-layout">
      <!-- Sidebar -->
      <div class="s-layout__sidebar">
        <a class="s-sidebar__trigger" href="#0">
          <i class="fa fa-bars"></i>
        </a>
        <nav class="s-sidebar__nav ">
          <div class="mx-2 py-2" >
            <a href="" class="btn-danger btn-block topbtnhead">Countrywide Stone</a>
          </div>
                      <ul class="addremul" style="border-top: 1px solid hsla(0,0%,67.8%,.2);">
        <li class="text-uppercase">
           <a class="s-sidebar__nav-link" href="{{url('home')}}">
              dashboard
           </a>
        </li>
        <li class="text-uppercase">
           <a class="s-sidebar__nav-link " href="{{url('project-list')}}">
              projects lists
           </a>
        </li>
        <li class='sub-menu addremli'>
           <a class="s-sidebar__nav-link addrema " href="#0">
              Employ Details <i class="fa fa-angle-down downdown"></i>
           </a>
           <ul>
                <li><a  href="{{url('add-employee')}}" class="s-sidebar__nav-link">Add Users</a></li>
                <li><a  href="{{url('add-employee-list')}}" class="s-sidebar__nav-link">Users</a></li>
                <li><a href="{{url('timesheet')}}" class="s-sidebar__nav-link">Timesheets</a></li>
                <li><a href="{{url('complete-timesheet')}}" class="s-sidebar__nav-link">Completed Timesheets</a></li>
            </ul>
        </li>
         <li class='sub-menu1 addremli' >
           <a class="s-sidebar__nav-link addrema" id="aaaa">
              Ticket Form <i class="fa fa-angle-down downdown"></i>
           </a>
   
           <ul id="nbnb">
                <li class="clk"><a href="{{url('add-ticket-form')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Add Form</a></li>
                <li class="clk"><a href="{{url('ticket-form')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Ticket Forms</a></li>
                <li class="clk"><a href="{{url('complete-ticket-form')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Completed Ticket Forms</a></li>
            </ul>
        </li>
           <li class='sub-menu2 addremli'>
           <a class="s-sidebar__nav-link addrema active1" id="aaaa2">
              Material <i class="fa fa-angle-down downdown"></i>
           </a>
           <ul id="nbnb2">
                <li class="clk"><a href="{{url('add-material')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Add Material</a></li>
                <li class="clk"><a href="{{route('material.list')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Material List</a></li>
                <li class="clk"><a href="{{url('place-order')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Place Order</a></li>
            </ul>
        </li>
        <li class='sub-menu3 addremli'>
              <a class="s-sidebar__nav-link addrema" id="aaaa3">
                  Shop Drawings<i class="fa fa-angle-down downdown"></i>
              </a>
              <ul id="nbnb3">
                    <li class="clk"><a href="{{url('upload-shop-drawing')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>Upload  Sketches</a></li>
                    <li class="clk"><a href="{{url('shopdrawinglist')}}" class="s-sidebar__nav-link"><i class="fa fas-plus-circle" style="margin-right:20px;"></i>View  Sketches</a></li>
                    
                </ul>
            </li>
     </ul>
        </nav>
      </div>
      <!-- Content -->
      <!-- Content -->
      <main class="s-layout__content">
        <div class="container-fluid" id="containoutn" style="padding-right: 0px;padding-left: 0px;">
         <nav class="navbar navbar-expand-lg navbar-light bg-white px-5 mb-3" id="dashboardnav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">
                <img src="{{asset('assets/images/dashdash.PNG')}}" alt="">
              </a>
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               @foreach($users as $user)
                  @if(Cache::has('user-is-online-' . $user->id))
                    <li class="nav-item mr-2">
                      <a href="" class="nav-link"><span class="text-success font-weight-bolder"><i class="fa fa-circle" style="font-size: 10px"></i>&nbsponline</span></a>
                    </li>
                   @else
                    <span class="text-secondary">Offline</span>
                   @endif
                <li class="nav-item">
                  <img src="{{asset('assets/images/images.jpg')}}" class="tableuserimg" alt="">
            
                </li>
                @endforeach
              </ul>
              <form class="form-inline ml-3 my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <div class="dropdown">
                  <button class="btn dropdown-toggle dashdrpbtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" >
                  <img src="{{asset('assets/images/images.jpg')}}" class="tableuserimg" alt="">
                  </button>
                  <div class="dropdown-menu mt-1" style="margin-left: -50px !important;" aria-labelledby="dropdownMenuButton">
                    <a href="{{url('add-employee')}}" class="s-sidebar__nav-link">Add User</a>
                    <a href="{{url('add-employee-list')}}" class="s-sidebar__nav-link">Users List</a>
                    <a class="s-sidebar__nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    </form>
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </nav>
                 <div style="padding-left:40px !important;padding-right:40px !important;">
                      @yield('content')
                 </div>
            </div>
          </main>
        </div>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
@stack('scripts')
    <script type="text/javascript">
        $('.sub-menu ul').hide();
        $(".sub-menu a").click(function () {
        $('.sub-menu ul').toggle();
        });
        </script>
        <script type="text/javascript">
        $('.sub-menu1 #nbnb').hide();
        $(".sub-menu1 #aaaa").click(function () {
        $('.sub-menu1 #nbnb').toggle();
        });
        </script>
        <script type="text/javascript">
        $('.sub-menu2 #nbnb2').hide();
        $(".sub-menu2 #aaaa2").click(function () {
        $('.sub-menu2 #nbnb2').toggle();
        });
        </script>
        <script type="text/javascript">
        $('.sub-menu3 #nbnb3').hide();
        $(".sub-menu3 #aaaa3").click(function () {
        $('.sub-menu3 #nbnb3').toggle();
        });
        </script>
        <script type="text/javascript">



$(document).on("change", ".rt", function() {
    var sum = 0;
    $(".rt").each(function(){
        sum += +$(this).val();
    });
    $(".totalrt").html(sum);
    console.log(sum);
});

$(document).on("change", ".ot", function() {
    var sum = 0;
    $(".ot").each(function(){
        sum += +$(this).val();
    });
    $(".totalot").html(sum);
    console.log(sum);
});

        </script>
        <script>
            $(document).ready(function(){
  $('ul li s-sidebar__nav-link').click(function(){
    $('li s-sidebar__nav-link').removeClass("active1");
    $(this).addClass("active1");
});
});
        </script>
                <script>
            $('.clk a').click(function(){
    $(this).find('i').toggleClass('fa-plus-circle fa-angle-right')
});
        </script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        -->
      </body>
    </html>