<?php 
    use App\Mahasiswa;
    use App\Pendaftaran;
?>

<html>
<head>
    <style>
        .tombol{
            height:50px; width:150px; background-color:#40016e; color: white; border-radius:30px; margin:10px;
        }
        .tombol:hover{
            background-color: #99decc; color:#40016e;
        }
     
    </style>
</head>
<body>
  
     
@extends('layouts.layout_maba_pkkmb')

@section('content')
<div class="container">

<!-- jika tombol pilih pkkmb di klik, maka data id admin pkkmb ditangkap 
     id dikirim ke route, pkkmbcontroller
     pindah ke layout_maba_pkkmb -->
    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Pendaftaran PKK-MB {{ $admin_pendaftaran->nama_fakultas}} - {{ $admin_pendaftaran->nama_universitas}}</div></h3>
            </div>
        </div>
    </div>

    @if ( Pendaftaran::where('mahasiswa_id', Auth::user()->mahasiswa->id )->first() != null  && Pendaftaran::where('admin_id', $admin_pendaftaran->id )->first() != null )
    
    <?php $mahasiswa_id = Auth::user()->mahasiswa->id ;
    $data_pendaftaran = Pendaftaran::where('mahasiswa_id', Auth::user()->mahasiswa->id )->first(); 
    $id = $data_pendaftaran->id ;
    ?>
      <div class="alert" >
          <h5> <div style="font-weight:bold;" > Pendaftaran Telah Dilakukan</div></h5>
          <h5>Status Pendaftaran :</h5>
      </div>
    <div class="row justify-content-center ">
    <div class="text-center">
        <div class="alert alert-dark" style="width:400px;"><b style="color:red"> {{$data_pendaftaran->status_verifikasi}}</b></div>
        @if ($data_pendaftaran->gugus != null )
        <p>No Gugus = {{$data_pendaftaran->gugus}} </p>
    
        @endif
    </div>
    </div>

@else

    <div class="container">
        <p>Untuk dapat melakukan pendaftaran PKK-MB yang dipilih, pastikan bahwa data diri anda telah terisi dangan benar <br>
        Tunggu Verifikasi data Pendaftaran onda oleh Admin Panitia untuk bisa mendapatkan Cocarde Peserta <br>
        Download Cocarde Peserta Anda di halaman ini</p>
    </div>

    <div class="row justify-content-center">

        <form method="post" action="/pendaftaran/store">
            @csrf
            <input type="hidden" value="{{ $admin_pendaftaran->id }}" name="admin_id">
            <input type="hidden" value="{{ Auth::user()->mahasiswa->id }} " name="mahasiswa_id">
            <input type="hidden" value="belum terverifikasi" name="status_verifikasi">
            
            <button type="submit" class="tombol" >Daftar PKK-MB</button>
        </form>
        
    </div>

@endif
    
</div>
@endsection

</body>
</html>
