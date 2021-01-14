<?php use App\Admin; ?>
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
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Pembagian Gugus </div></h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-center">
                   
                  
                    
                    @for ($no_gugus = 1; $no_gugus <= $jumlah_gugus; $no_gugus++)
                    <div class="card-header" style="background-color: #d0bfe3;">
                       <b> Daftar mahasiswa Gugus {{$no_gugus}} </b>
                       
                    </div>
                    <div class="card-body">                                       
                        @foreach ($pendaftaran as $pen)
                            @if ( $pen->gugus !== $no_gugus)
                                @continue
                            @endif                      
                            <p> {{ $pen->mahasiswa->nama_lengkap}} -- Prodi {{ $pen->mahasiswa->prodi}} </p>                    
                        @endforeach        
                    </div>
                    @endfor
               
                               
                </div>
            </div>
        </div>

</div>



@endsection
        
    

    </body>
</html>