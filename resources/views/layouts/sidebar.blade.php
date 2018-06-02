<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar.css') }}" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    
</head>

<body>
 
 
 
         <div class="wrapper">
             <!-- Sidebar Holder -->
             <nav id="sidebar">
                 <div class="sidebar-header">
                     <a href="/home"><h3>Citi Motor Bekasi</h3></a>
                 </div>
 
                 <ul class="list-unstyled components">
                     <a href="/home"><p>Dashboard</p></a>
                     <li class="active">
                         <a href="#sparepartsSubmenu" data-toggle="collapse" aria-expanded="false">Spare Parts</a>
                         <ul class="collapse list-unstyled" id="sparepartsSubmenu">
                             <li><a href="/spareparts">Lihat Spare Parts</a></li>
                             <li><a href="/spareparts/create">Tambah spare part</a></li>
                             <li><a href="#">Home 3</a></li>
                         </ul>
                     </li>
                     <li class="active">
                         <a href="#customerSubmenu" data-toggle="collapse" aria-expanded="false">Customer</a>
                         <ul class="collapse list-unstyled" id="customerSubmenu">
                             <li><a href="#">customer 1</a></li>
                             <li><a href="#">customer 2</a></li>
                             <li><a href="#">customer 3</a></li>
                         </ul>
                     </li>
                     <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                            </ul>
                    </li>
                    <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li><a href="#">Home 1</a></li>
                                <li><a href="#">Home 2</a></li>
                                <li><a href="#">Home 3</a></li>
                            </ul>
                    </li>
                    

                 </ul>
 
                 <ul class="list-unstyled CTAs">
                        <li class="active">
                                <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ Auth::user()->name }}, {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                     <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                 </ul>
             </nav>
 
             <!-- Page Content Holder -->
             <div id="content">
 
                 <nav class="navbar navbar-default">
                     <div class="container-fluid">
 
                         <div class="navbar-header">
                             <button type="button" id="sidebarCollapse" class="navbar-btn">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </button>
                         </div>
                     </div>
                 </nav>
 
                    @yield('content')
             </div>
         </div>


 
 
         <!-- jQuery CDN -->
          <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
          <!-- Bootstrap Js CDN -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
          <script type="text/javascript">
              $(document).ready(function () {
                  $('#sidebarCollapse').on('click', function () {
                      $('#sidebar').toggleClass('active');
                      $(this).toggleClass('active');
                  });
              });
          </script>
     </body>
 </html>
 