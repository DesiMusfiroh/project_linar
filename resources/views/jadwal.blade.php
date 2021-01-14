<html>
    <head>
        

    </head>

    <body>
@extends('layouts.layout_admin')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-10">
                
        <div class="row">
            <div class="col-md-12">
                <div class="alert text-center" style="background-color:#99decc" role="alert">
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Atur Jadwal PKK-MB </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body ">

                        <form method="post" action="/mahasiswa/store">
                        @csrf
                    

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file_foto" >
                            <label class="custom-file-label" for="customFile" >Pilih File Twibbon</label>
                        </div>              
                    
                        <br> <br> 
                        <button type="submit" class="btn btn-primary">Upload File</button>
                    </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>

    </div>

    <div class="col-md-2"></div>
</div>



@endsection
        
    

    </body>
</html>