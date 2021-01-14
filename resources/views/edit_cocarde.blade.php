<?php use App\Admin; 
    use App\Cocarde; 
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
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Update Desain Cocarde  </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
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
                    <form method="post" action="/cocarde/update/{{ $cocarde->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }}">  
                        <div class="form-group">
                            <input type="file" name="cocarde" >
                        </div>
    
                        <button type="submit" class="btn btn-primary" style="background-color:#6c10a1; color:white;">Upload File</button>
                    </form>
                </div>
       
            </div>
        </div>
    </div>
</div>

@endsection


</body>
</html>