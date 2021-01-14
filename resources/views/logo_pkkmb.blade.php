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
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Upload Logo PKK-MB  </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body ">

                        <form method="post" action="{{ url('logo/update') }}">
                        @csrf
                        
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file_foto" >
                            <label class="custom-file-label" for="customFile" >Pilih File Logo PKK-MB</label>
                        </div> <br><br>
                        
                        <div class="form-group">
                            <label for="deskripsi_logo">Deskripsi Logo :</label>
                            <textarea class="form-control" id="deskripsi_logo" rows="3" name="deskripsi_logo" placeholder=""> </textarea>
                        </div>            
                        
                        <button type="submit" class="btn btn-primary"  style="background-color:#6c10a1; color:white;">Simpan dan Upload File</button>
                    </div>
                    </form>
                
                </div>
            </div>
        </div>
</div>



@endsection
        
    

    </body>
</html>