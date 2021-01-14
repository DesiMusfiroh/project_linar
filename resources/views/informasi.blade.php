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
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Unggah Informasi PKK-MB  </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body ">

                    @if ($message = Session::get('success'))               
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    
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

                        <form method="post" action="informasi/store"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }} ">
                        
                        <div class="form-group">
                            <label for="poster_informasi">Pilih File Poster Informasi PKK-MB</label> <br>
                            <input type="file" name="poster_informasi" id="poster_informasi">
                        </div>
                        
                        <div class="form-group row">
                            <label for="prodi" class="col-sm-3 col-form-label">Judul Informasi :</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul_informasi" name="judul_informasi" placeholder="Judul">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi_logo">Informasi :</label>
                            <textarea class="form-control" id="isi_informasi" rows="5" name="isi_informasi" placeholder=""> </textarea>
                        </div>            
                        <div class="text-right">
                        <button type="submit" class="btn btn-primary "  style="background-color:#6c10a1; color:white;">   Kirim  <i class="fa fa-send"> </i></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
        
 </body>



</html>