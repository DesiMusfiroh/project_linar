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
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Edit Data PKK-MB </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body ">
                    <br>
                    
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif

                    <form method="post" action="/admin/update/{{ $admin->id }}">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }} ">                 
                            
                        <div class="form-group row">
                            <label for="universitas" class="col-sm-3 col-form-label text-md-right"> Nama Universitas</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="universitas" name="nama_universitas" value="{{$admin->nama_universitas }}" placeholder="Universitas .....">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis" class="col-sm-3 col-form-label text-md-right">Jenis PKK-MB</label>
                            <div class="col-sm-4">
                            <select id="inputState" class="form-control" name="jenis_pkkmb">
                                <option selected>Pilih Jenis PKK-MB</option>
                                <option value="PKK-MB Universitas"> PKK-MB Universitas</option>
                                <option value="PKK-MB Fakultas"> PKK-MB Fakultas</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fakultas" class="col-sm-3 col-form-label text-md-right"> Nama Fakultas</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="fakultas" name="nama_fakultas" value="{{$admin->nama_fakultas }}"  placeholder="Fakultas .....">
                            </div>
                        </div>

                        <div class="form-group row">
                                                
                                <label for="tahun" class="col-sm-5 text-md-right "> Tahun Kegiatan</label>
                                
                                <input type="text" class="col-sm-2 form-control " id="tahun" name="tahun"  value="{{$admin->tahun }}" placeholder="Tahun">
                               
                       
                                <label for="jumlah_gugus" class="col-sm-3 text-md-right"> Jumlah Gugus</label>
                               
                                <input type="text" class="col-sm-1  form-control" id="jumlah_gugus" name="jumlah_gugus"  value="{{$admin->jumlah_gugus }}" placeholder="">
                       
                        </div>

                        <div class="col-md-8 offset-md-8">
                            <button type="submit" class="btn btn-primary" style="background-color:#6c10a1; color:white;" >Simpan Data PKK-MB</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
        
    

    </body>
</html>