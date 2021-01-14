<?php use App\Admin; 
    use App\Informasi; 
?>
<html>
    <head>
       

    </head>

    <body>
@extends('layouts.layout_admin')

@section('content')
<div class="container">
          
        <div class="row">
            <div class="col-md-12">
                <div class="alert text-center" style="background-color:#99decc" role="alert">
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Edit Informasi PKK-MB  </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body ">

                                      
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif  

                    <form method="post" action="/informasi/update/{{ $informasi->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }} ">

                        <div class="text-center"><img width="350px" src="/data_file/{{$informasi->poster_informasi}}" alt=""> </div>

                        <input type="hidden" name="poster_informasi" value="{{$informasi->poster_informasi}}">
                        <br>
                        <div class="form-group row">
                            <label for="prodi" class="col-sm-3 col-form-label">Judul Informasi :</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul_informasi" name="judul_informasi" value="{{$informasi->judul_informasi}}" placeholder="Judul">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_logo">Informasi :</label>
                            <textarea class="form-control" id="isi_informasi" rows="5" name="isi_informasi"  value="{{$informasi->isi_informasi}}"  placeholder=""> </textarea>
                        </div>            
                        
                        <button type="submit" class="btn btn-primary"  style="background-color:#6c10a1; color:white;">Simpan Perubahan</button>
                    </form>
                    </div>                 
                </div>
            </div>
        </div>
</div>

@endsection
        
 </body>



</html>