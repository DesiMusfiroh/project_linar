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
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Tema PKK-MB </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body ">

                        <form method="post" action="/pkkmb/store">
                        @csrf
                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }} ">

                        <div class="form-group row">
                            <label for="tema" class="col-sm-3 col-form-label text-md-right">Tema PKK-MB :</label>
                            <div class="col-sm-9">
                            <textarea class="form-control" id="tema" rows="2" name="tema" placeholder=""> </textarea>
                            </div>
                        </div>
                        
                        <div class="row">
                        <div class=" col-md-12 offset-md-3">
                            <button type="submit" class="btn btn-primary" style="background-color:#6c10a1; color:white;">Simpan</button>         
                        </div>
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