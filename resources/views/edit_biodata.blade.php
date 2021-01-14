<?php use App\Mahasiswa; ?>
<html>

    <head>
    </head>

    <body>
@extends('layouts.layout_maba')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-10">

        <div class="row">
            <div class="col-md-12">
                <div class="alert text-center" style="background-color:#99decc" role="alert">
                    <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Lengkapi Data Diri </div></h3>
                </div>
            </div>
        </div>

    <div class="row justify-content-center">
        <div class="col-md-9"> 
            <div class="card">
                <div class="card-body ">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
                @endif

                    <form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }} ">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama_lengkap">Nama Lengkap  : </label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap" value="{{$mahasiswa->nama_lengkap }}">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="nim">Nomor Induk Mahasiswa  : </label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM" value="{{$mahasiswa->nim }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prodi" class="col-sm-3 col-form-label">Program Studi :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder=" Nama Prodi" value="{{$mahasiswa->prodi }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 col-form-label">Fakultas :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Nama Fakultas" value="{{$mahasiswa->fakultas }}">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="universitas">Universitas  :</label>
                            <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Nama Universitas" value="{{$mahasiswa->universitas }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="jalur_penerimaan">Jalur Penerimaan</label>
                            <select id="jalur_penerimaan" class="form-control" name="jalur_penerimaan">
                                <option selected>Pilih...</option>
                                <option value="SNMPTN" >SNMPTN</option>
                                <option value="SBMPTN" >SBMPTN</option>
                                <option value="SMMPTN" >SMMPTN</option>
                                <option value="Lain-Lain" >Lain-lain</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="angkatan">Angkatan</label>
                            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Tahun" value="{{$mahasiswa->angkatan }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                        <label for="no_hp">Nomor Handphone / WhatsApp  : </label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="+ 62  .........."  value="{{$mahasiswa->no_hp }}">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="tanggal_lahir">Tanggal Lahir  : </label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd-mm-yyyy" value="{{$mahasiswa->tanggal_lahir }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="asal_sekolah" class="col-sm-3 col-form-label">Asal Sekolah :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder=" Nama Sekolah Asal" value="{{$mahasiswa->asal_sekolah }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="2" name="alamat" placeholder="Alamat Rumah / kost">  {{$mahasiswa->alamat }}</textarea>
                    </div>
     
                    <div class="form-group">
                        <label for="file_foto">Pilih File Foto Anda  : </label>
                        <input type="file" name="file_foto" >
                    </div>          
        
                    <button type="submit" class="btn btn-primary">Simpan Data Diri</button>
                </div>
                </form>
               
            </div>
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