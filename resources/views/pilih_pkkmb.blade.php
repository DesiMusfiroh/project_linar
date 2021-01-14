@extends('layouts.layout_maba')

@section('content')
<div class="container">

<!-- jika tombol pilih pkkmb di klik, maka data id admin pkkmb ditangkap 
     id dikirim ke route, pkkmbcontroller
     pindah ke layout_maba_pkkmb -->
    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Pilih PKK-MB </div></h3>
            </div>
        </div>
    </div>

    <div class="row">
    @foreach ($admin as $adm)
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header"  style="background-color: #d0bfe3;">
                    {{ $adm->jenis_pkkmb }}
                </div>
                <div class="card-body">
                    <h5 class="card-title"> {{$adm->nama_fakultas}} - {{$adm->nama_universitas}} </h5>
                    <p class="card-text">Tahun Kegiatan {{ $adm->tahun }}</p>
                    <a href="/pendaftaran/{{ $adm->id }}" class="btn btn-primary">Pilih PKK-MB</a>
                </div>

            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection