<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #b4d9cf;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
                font-family: showcard gothic;
                color:  #40016e;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
        <div class="flex-center position-ref full-height">
        
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}" ><button type="button" class="btn btn-lg pl-5 pr-5" style="background-color:#40016d; color:white; font-weight:bold"> Home </button></a>
                    @else
                        <a href="{{ route('login') }}" > <button type="button" class="btn btn-lg pl-5 pr-5" style="background-color:#40016d; color:white; font-weight:bold"> Login </button> </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"> <button type="button" class="btn btn-lg pr-5 pl-5 " style="background-color:#40016d; color:white; font-weight:bold"> Register </button> </a>
                        @endif
                    @endauth
                </div>
            @endif
           

            <div class="content">
                <div class="title m-b-md">
                    <i class="fa fa-eye"></i>
                    LINAR
                </div>

                <div>
                    <h1>Klik untuk Daftar</h1>
                    <p>Linar adalah website sistem informasi pendaftaran PKK-MB 
                    (Pengenalan Kehidupan Kampus - Mahasiswa Baru)</p>
                    <h2>Tim Developer</h2>
                    <p>Desi Musfiroh - Hanny Tri Meilinda - Agus Prastiyo</p>
                </div>


               
            </div>
        </div>
    </body>
</html>
