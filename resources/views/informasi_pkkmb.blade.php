<html>
    <head></head>

    <body>
@extends('layouts.layout_maba_pkkmb')

@section('content')
<div class="container">
          
        <div class="row">
            <div class="col-md-12">
                <div class="alert text-center" style="background-color:#99decc" role="alert">
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Lihat Informasi PKK-MB yang akan diikuti </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

        @foreach ($informasi as $info)
            <div class="col-sm-9 ">
                <div class="card text-center">
                    <div class="card-header"  style="background-color: #d0bfe3;">
                        {{ $info->judul_informasi }}
                    </div>
                    <div class="card-body">
                        <img width="350px" src="/data_file/{{$info->poster_informasi}}" alt=""> <br>
                        {{ $info->isi_informasi }}
                    </div>

                </div>
            </div>
            <div class="col-sm-12"> <hr></div>
        @endforeach
        </div>

</div>

@endsection
        
 </body>

</html>
