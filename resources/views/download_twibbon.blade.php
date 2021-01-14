<?php 
    use App\Admin; 
    use App\Mahasiswa;
    use App\Twibbon; 
?>
<html>
<head>

</head>

<body>
@extends('layouts.layout_maba_pkkmb')

@section('content')
<div class="container">
         
    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Download Twibbon  </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">               
                
                        <div class="card-body text-center">
                        
                            @foreach ($twibbon as $twib)
                            <img width="350px" src="/data_file/{{$twib->twibbon}}" alt=""> <br> <hr>
                            <a href="{{url('data_file/'.$twib->twibbon)}}"><button class="btn btn-primary">Download Twibbon</button></a>
                            
                            @endforeach
                        </div>
                       
                        </div>
                 
            </div>
        </div>
        
    </div>
</div>

@endsection


</body>
</html>