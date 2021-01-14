<html>
    <head></head>

    <body>
@extends('layouts.layout_admin')

@section('content')
<div class="container">
          
        <div class="row">
            <div class="col-md-12">
                <div class="alert text-center" style="background-color:#99decc" role="alert">
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Lihat Informasi PKK-MB yang telah di unggah  </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

        @if ($message = Session::get('success'))               
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">  ×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

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
                    <div class="card-footer">
                        <a href="informasi/edit/{{$info->id}}" class="btn btn-primary btn-sm">Edit Informasi</a>
                        <a href="informasi/delete/{{$info->id}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a>
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
