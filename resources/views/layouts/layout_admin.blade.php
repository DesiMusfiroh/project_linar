<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

    <style>
        .sidebar-container {
        position: fixed;
        width: 220px;
        height: 100%;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        background: #1a1a1a;
        color: #fff;
        }

        .content-container {
        padding-top: 20px;
        }

      
        .sidebar-navigation {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: relative;
        }

        .sidebar-navigation li {
        background-color: transparent;
        position: relative;
        display: inline-block;
        width: 100%;
        line-height: 20px;
        }

        .sidebar-navigation li a {
        padding: 10px 15px 10px 30px;
        display: block;
        color: #fff;
        }

        .sidebar-navigation li .fa {
        margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
        text-decoration: none;
        outline: none;
        }

        .sidebar-navigation li::before {
        background-color:#6c10a1;
        position: absolute;
        content: '';
        height: 100%;
        left: 0;
        top: 0;
        -webkit-transition: width 0.2s ease-in;
        transition: width 0.2s ease-in;
        width: 3px;
        z-index: -1;
        }

        .sidebar-navigation li:hover::before {
        width: 100%;
        }

        .sidebar-navigation .header {
        font-size: 12px;
        text-transform: uppercase;
        background-color: #151515;
        padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
        background-color: transparent;
        }

        .content-container {
        padding-left: 220px;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-lg fixed-top"  style="background-color: #40016e" >
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2 style="font-family: maiandra gd; color:#99decc; font-weight:bold;"> <i class="fa fa-home" ></i> LINAR ( Klik untuk Daftar )</h2>     
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="font-family:maiandra gd; font-size:20px"  href="{{ route('login') }}"> Login </a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" style="font-family:maiandra gd; font-size:20px" href="{{ route('register') }}">{{ __('Register') }} </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="font-family:maiandra gd; font-size:20px; color:#99decc; " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"> </i>  {{ Auth::user()->name }} <span class="caret"></span> 
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row no-gutters mt-5">
            <div class="col-md-2 pt-3 bg-dark">
            <div class="sidebar-container">
            <ul class="sidebar-navigation">
                <li class="header" style="color:#99decc;">Menu Utama</li>
                <li>
                <a href="/home">
                    <i class="fa fa-home" aria-hidden="true"></i> Dashboard
                </a>
                </li>
                <li>
                <a href="/admin">
                    <i class="fa fa-home" aria-hidden="true"></i> Data PKK-MB
                </a>
                </li>
                <li class="header" style="color:#99decc;">Data Mahasiswa</li>
                <li>
                <li>
                <a href="/data_mahasiswa">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Lihat Data Mahasiswa
                </a>
                </li>
                <li>
                <a href="/pembagian_gugus">
                    <i class="fa fa-tachometer" aria-hidden="true"></i> Pembagian Gugus
                </a>
                </li>
                <li class="header" style="color:#99decc;">Informasi PKK-MB</li>
                <li>
                
                <li>
                <a href="/upload_twibbon">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Upload Twibbon
                </a>
                </li>
                <li>
                <a href="/upload_cocarde">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Upload Cocarde
                </a>
                </li>
                <li>
                <a href="/informasi">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Unggah Informasi 
                </a>
                </li>
                <li>
                <a href="/lihat_informasi">
                    <i class="fa fa-info-circle" aria-hidden="true"></i> Lihat Informasi PKK
                </a>
                </li>
            </ul>
            </div>
            </div>


            <div class=" col-md-10 no-gutters mt-5 ">
           
                <div class="container">
                @yield('dashboard')
                    <div class="row">
                        <div class="col-md-10"> @yield('content') </div>

                        <div class="col-md-2 ">  </div> 
                    </div>
                    
                </div>
            </div>
        </div>


        
    </div>
</body>


<script>
/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>

</html>
