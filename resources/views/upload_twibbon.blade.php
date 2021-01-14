<?php use App\Admin; 
    use App\Twibbon; 
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
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Upload Desain Twibbon  </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">

            @if ( Twibbon::where('admin_id', Auth::user()->admin->id )->first() != null )

            <?php
                $data_twibbon = Twibbon::where('admin_id', Auth::user()->admin->id )->first(); 
                $id_twibbon = $data_twibbon->id ;
            ?>

                <div class="card-body">
                    @if ($message = Session::get('success'))               
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    <br>
                    <div class="text-center">
                        <img width="350px" src="/data_file/{{$data_twibbon->twibbon}}" alt="">
                    </div><br>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-center">
                        <a href="twibbon/edit/{{$data_twibbon->id}}"><button class="btn btn-primary" style="background-color:#6c10a1; color:white;" >Ganti Model Twibbon</button></a>
                    </div>	
                </div>
            @else
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
                    <form method="post" action="{{ url('/twibbon/store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <input type="hidden" name="admin_id" value="{{ Auth::user()->admin->id }}">  
                        <div class="form-group">
                            <input type="file" name="twibbon" >
                        </div>
    
                        <button type="submit" class="btn btn-primary" style="background-color:#6c10a1; color:white;">Upload File</button>
                    </form>
                </div>
            @endif
            </div>
        </div>
    </div>
</div>

@endsection


</body>
</html>