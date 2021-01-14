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

@if ( Mahasiswa::where('users_id', Auth::user()->id )->first() != null )
      
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Data Diri </div></h3>
            </div>     
 
    <?php
        $users_id = Auth::user()->id ;
        $data_diri = Mahasiswa::where('users_id', Auth::user()->id )->first(); 
        $id_mahasiswa = $data_diri->id ;
    ?>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body ">

                <!-- MENAMPILKAN PESAN DATA BERHASIL DI SIMPAN ATAU DI UPDATE-->
                @if ($message = Session::get('success'))               
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                
                <div class="row">
                    <div class="col-md-4">
                    <img src="/data_file/{{$data_diri->file_foto}}" width="190px"  class="rounded float-left" alt="...">
                    </div>
                    <div class="col-md-8">
                    <tr>
                        <td col><b> Nama Lengkap :</b> </td>
                        <td>{{ $data_diri->nama_lengkap }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> NIM :</b> </td>
                        <td>{{ $data_diri->nim }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Program Studi :</b> </td>
                        <td>{{ $data_diri->prodi }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Fakultas : </b></td>
                        <td>{{ $data_diri->fakultas }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Universitas : </b></td>
                        <td>{{ $data_diri->universitas}}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Tahun Penerimaan : </b></td>
                        <td>{{ $data_diri->angkatan }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Jalur Penerimaan : </b> </td>
                        <td>{{ $data_diri->jalur_penerimaan }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Nomor Handphone :</b> </td>
                        <td>{{ $data_diri->no_hp }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Tanggal Lahir :</b> </td>
                        <td>{{ $data_diri->tanggal_lahir }}</td>
                    </tr><br>
                    <tr>
                        <td col><b> Alamat :</b> </td>
                        <td>{{ $data_diri->alamat }}</td>
                    </tr><br>

                    </div>
                </div>
                   
                </div>
                <div class="card-footer">
                <div class="row justify-content-center">
                    <a href="mahasiswa/edit/{{$data_diri->id}}"><button class="btn btn-primary" style="background-color:#6c10a1; color:white;" >Edit Data diri</button></a>
                </div>	
                </div>
            </div>
        </div>
    </div>

@else
                
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
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form method="post" action="/mahasiswa/store" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }} ">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="nama_lengkap">Nama Lengkap  : </label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama lengkap">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="nim">Nomor Induk Mahasiswa  : </label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="NIM">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="prodi" class="col-sm-3 col-form-label">Program Studi :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder=" Nama Prodi">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fakultas" class="col-sm-3 col-form-label">Fakultas :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Nama Fakultas">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="universitas">Universitas  :</label>
                            <input type="text" class="form-control" id="universitas" name="universitas" placeholder="Nama Universitas">
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
                            <input type="text" class="form-control" id="angkatan" name="angkatan" placeholder="Tahun">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                        <label for="no_hp">Nomor Handphone / WhatsApp  : </label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="+ 62  ..........">
                        </div>
                        <div class="form-group col-md-4">
                        <label for="tanggal_lahir">Tanggal Lahir  : </label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="dd-mm-yyyy">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="asal_sekolah" class="col-sm-3 col-form-label">Asal Sekolah :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder=" Nama Sekolah Asal">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" rows="2" name="alamat" placeholder="Alamat Rumah / kost"> </textarea>
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
    
@endif
    </div>
</div>
</div>

    </div>

    <div class="col-md-2"></div>
</div>

@endsection
        

    </body>
</html>