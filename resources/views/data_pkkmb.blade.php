<?php use App\Admin; ?>
<html>
    <head>
    </head>

    <body>
@extends('layouts.layout_admin')

@section('content')
<div class="container">


@if ( Admin::where('users_id', Auth::user()->id )->first() != null )
    
    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Data PKK-MB </div></h3>
            </div>
        </div>
    </div>
 
    <?php $users_id = Auth::user()->id ;
     $data_pkkmb = Admin::where('users_id', Auth::user()->id )->first(); 
     $id = $data_pkkmb->id ;
    ?>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
             
                @if ($message = Session::get('success'))               
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif      
                     
                    <tr>
                        <td> <b> Nama Fakultas  </b> </td>
                        <td> : {{ $data_pkkmb->nama_fakultas }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td> <b> Nama Universitas  </b></td>
                        <td> : {{ $data_pkkmb->nama_universitas }}</td>
                    </tr>
                    <br>
                    <tr>
                        <td> <b> Tahun Kegiatan  </b></td>
                        <td> : {{ $data_pkkmb->tahun}}</td>
                    </tr>
                    <br>
                    <tr>
                        <td><b> Jumlah Gugus  </b></td>
                        <td> : {{ $data_pkkmb->jumlah_gugus}}</td>
                    </tr>
           
                </div>
                <div class="card-footer">
                    <div class="row justify-content-center">
                        <a href="admin/edit/{{$data_pkkmb->id}}"><button class="btn btn-primary" style="background-color:#6c10a1; color:white;" > 
                        <i class="fa fa-edit" style="color:yellow"></i> Edit Data PKK-MB</button></a>
                    </div>	
                </div>
            </div>
        </div>
    </div>
    

@else

    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" >Lengkapi Data PKK-MB </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body ">
                    <br>
                    <form method="post" action="/admin/store">
                        @csrf
                        <input type="hidden" name="users_id" value="{{ Auth::user()->id }} ">                 
                            
                        <div class="form-group row">
                            <label for="universitas" class="col-sm-3 col-form-label text-md-right"> Nama Universitas</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="universitas" name="nama_universitas" placeholder="Universitas .....">
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
                            <input type="text" class="form-control" id="fakultas" name="nama_fakultas" placeholder="Fakultas .....">
                            </div>
                        </div>

                        <div class="form-group row">
                                                
                                <label for="tahun" class="col-sm-5 text-md-right "> Tahun Kegiatan</label>
                                
                                <input type="text" class="col-sm-2 form-control " id="tahun" name="tahun" placeholder="Tahun">
                               
                       
                                <label for="jumlah_gugus" class="col-sm-3 text-md-right"> Jumlah Gugus</label>
                               
                                <input type="text" class="col-sm-1  form-control" id="jumlah_gugus" name="jumlah_gugus" placeholder="">
                       
                        </div>

                        <div class="col-md-8 offset-md-8">
                            <button type="submit" class="btn btn-primary" style="background-color:#6c10a1; color:white;" >Simpan Data PKK-MB</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endif
</div>



@endsection
        
    

    </body>
</html>