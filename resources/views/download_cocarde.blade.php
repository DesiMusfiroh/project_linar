<?php 
    use App\Admin; 
    use App\Mahasiswa;
    use App\Cocarde; 
    use App\Pendaftaran;
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
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Download Cocarde Peserta PKK-MB </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">               
                 
    <?php $mahasiswa_id = Auth::user()->mahasiswa->id ;
    $data_pendaftaran = Pendaftaran::where('mahasiswa_id', Auth::user()->mahasiswa->id )->first(); 
    $id = $data_pendaftaran->id ;
    ?>
     @if ($data_pendaftaran->gugus != null )
                        <div class="card-body text-center">
                        
                            @foreach ($cocarde as $coca)
                            <img width="350px"  src="/data_file/{{$coca->cocarde}}" alt=""> <br> <hr>
                            <a href="{{url('data_file/'.$coca->cocarde)}}"><button class="btn btn-primary">Download Cocarde </button></a>
                            
                            @endforeach
                        </div>
                       
                        </div>
    @else
    <div class="alert alert-danger text-center">
    <p> Cocarde belum bisa di download </p>   
    </div>
    @endif        
            </div>
        </div>
        
    </div>
</div>

@endsection


</body>
</html>