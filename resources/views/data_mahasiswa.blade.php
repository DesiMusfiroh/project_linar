<?php use App\Admin;
  use App\Mahasiswa; 
  use App\Pendaftaran; ?>
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
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" > Data Mahasiswa Baru </div></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">               
                <div class="card-body ">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col" style="width:50px">No</th>
                            <th scope="col" style="width:350px">Nama</th>
                            <th scope="col" style="width:230px">NIM</th>
                            <th scope="col" style="width:270px">Status Verifikasi</th>
                            <th scope="col" style="width:70px"></th>
                            <th scope="col" style="width:15px"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0;?>
                        <?php 
                            //$jumlah_gugus = Admin::where('users_id', Auth::user()->id )->get('jumlah_gugus');
                            //$jlh_gugus = val($jumlah_gugus);
                            $no_gugus=0; 
                        ?>
                       
                        @foreach ($pendaftaran as $pen) 
                            <tr>
                            <th scope="row"><?php  $i++;  echo $i; ?></th>
                            <td>{{ $pen->mahasiswa->nama_lengkap }}</td>
                            <td>{{ $pen->mahasiswa->nim }}</td>
                            <td>{{ $pen->status_verifikasi }}</td>
                           
                            <?php  //echo $jlh_gugus; ?>
                             
                            <?php  if ($no_gugus >= $pen->admin->jumlah_gugus ) { $no_gugus=0; }
                                   $no_gugus++;                             
                                   //echo  $no_gugus;
                            ?>
                                                                         
                            <td><button type="button" class="btn btn-sm" data-toggle="modal" data-target=".detail_modal"style="background-color:#6c10a1; color:white;" 
                                        id="detail"
                                        data-nama_lengkap="{{ $pen->mahasiswa->nama_lengkap }}"
                                        data-nim="{{ $pen->mahasiswa->nim }}"
                                        data-prodi="{{ $pen->mahasiswa->prodi}}"
                                        data-fakultas="{{ $pen->mahasiswa->fakultas}}"
                                        data-universitas="{{ $pen->mahasiswa->universitas}}"
                                        data-jalur_penerimaan="{{ $pen->mahasiswa->jalur_penerimaan}}"
                                        data-angkatan="{{ $pen->mahasiswa->angkata}}"
                                        data-asal_sekolah="{{ $pen->mahasiswa->asal_sekolah}}"
                                        data-tanggal_lahir="{{ $pen->mahasiswa->tanggal_lahir}}"
                                        data-no_hp="{{ $pen->mahasiswa->no_hp}}"
                                        data-alamat="{{ $pen->mahasiswa->alamat}}"
                                        data-file_foto="{{ $pen->mahasiswa->file_foto}}"

                                        data-id="{{ $pen->id}}"   
                                        data-mahasiswa_id="{{ $pen->mahasiswa_id}}"                                       
                                        data-admin_id="{{ $pen->admin_id}}"                                       
                                        data-status_verifikasi="{{ $pen->status_verifikasi}}"
                                        data-no_gugus="{{$no_gugus}}"
                                       
                                        >  Detail </button>
                            </td>
                            <td>
                                <button class="btn btn-danger" data-toggle="modal" data-target=".delete_modal"
                                    id="delete"
                                    data-id_delete="{{ $pen->id }}"
                                    data-nama_delete="{{ $pen->mahasiswa->nama_lengkap }}"
                                    
                                    ><i class="fa fa-trash"></i></button>
                            </td>
                            </tr>
                        @endforeach 
                      
                       
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>

<!-- Pembuka Pagination Bar -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end pagination-md">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
<!-- Penutup Pagination Bar -->
            
<!-- Detail  modal -->
 
    <div class="modal fade detail_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Lihat Detail dan Verifikasi </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body table-responsive">
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center" >
            
                        <img width="200px" src="/data_file/user ikon.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table table-striped table-sm no-margin">
                            <tbody>
                                <tr>
                                    <td width="150px">Nama Lengkap</td>
                                    <td>: <span id="nama_lengkap"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">NIM</td>
                                    <td>: <span id="nim"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Program Studi</td>
                                    <td>: <span id="prodi"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Fakultas</td>
                                    <td>: <span id="fakultas"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Universitas</td>
                                    <td>: <span id="universitas"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Jalur Penerimaan</td>
                                    <td>: <span id="jalur_penerimaan"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Angkatan</td>
                                    <td>: <span id="angkatan"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Asal Sekolah</td>
                                    <td>: <span id="asal_sekolah"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Tanggal Lahir</td>
                                    <td>: <span id="tanggal_lahir"></span></td>
                                </tr>
                                <tr>
                                    <td width="150px">Nomor Handphone</td>
                                    <td>: <span id="no_hp"></span></td>
                                </tr>
                              
                            </tbody>
                        </table>              
                    </div>
                </div>
                  
            </div>

            <div class="modal-footer">
                <form action="/pendaftaran/update" method="post">
                @csrf
                @method('PATCH')
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  
              
                    <input type="hidden" name="status_verifikasi" value="Telah terverifikasi"> 
                    <input type="hidden" name="mahasiswa_id" id="mahasiswa_id" value="">
                    <input type="hidden" name="id" id="id" value="">
                    <input type="hidden" name="admin_id" id="admin_id" value="" >
                  
                    <input type="hidden" name="gugus" id="no_gugus" value="">
                       
                        <button type="submit" class="btn" style="background-color:#6c10a1; color:white;">Verifikasi</button>
                  
                </form>
                   

            </div>

        </div>
    </div>
    </div>
    
<!-- Penutup Detail  modal -->

<!-- Delete Modal -->
    <div class="modal fade delete_modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">Hapus Pendaftaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="/pendaftaran/delete" method="post">
            @csrf
            <div class="modal-body">
                
                <input type="hidden" name="id" id="id_delete" value="">
                <p>Data pendaftaran mahasiswa bernama <b> <span id="nama_delete"></span>  </b> akan di hapus </p> 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus Pendaftaran</button>
            </div>
        </form>
        </div>
    </div>
    </div>

<!-- Penutup Delete Modal -->

</div>

<script>
$(document).ready(function(){
    $(document).on('click','#detail', function(){
        var nama_lengkap = $(this).data('nama_lengkap');
        var nim = $(this).data('nim');
        var prodi = $(this).data('prodi');
        var fakultas = $(this).data('fakultas');
        var universitas = $(this).data('universitas');
        var jalur_penerimaan = $(this).data('jalur_penerimaan');
        var angkatan = $(this).data('angkatan');
        var asal_sekolah = $(this).data('asal_sekolah');
        var tanggal_lahir = $(this).data('tanggal_lahir');
        var no_hp = $(this).data('no_hp');
        var alamat = $(this).data('alamat');
        var file_foto = $(this).data('file_foto');
        var id = $(this).data('id');
        var mahasiswa_id = $(this).data('mahasiswa_id');
        var admin_id = $(this).data('admin_id');
        var status_verifikasi = $(this).data('status_verifikasi');
        var no_gugus = $(this).data('no_gugus');
        var no_gugus = $(this).data('no_gugus');

        $('#nama_lengkap').text(nama_lengkap);
        $('#nim').text(nim);
        $('#prodi').text(prodi);
        $('#fakultas').text(fakultas);
        $('#universitas').text(universitas);
        $('#jalur_penerimaan').text(jalur_penerimaan);
        $('#angkatan').text(angkatan);
        $('#asal_sekolah').text(asal_sekolah);
        $('#tanggal_lahir').text(tanggal_lahir);
        $('#no_hp').text(no_hp);
        $('#alamat').text(alamat);  
        $('#file_foto').val(file_foto);  
        $('#id').val(id);
        $('#admin_id').val(admin_id);
        $('#mahasiswa_id').val(mahasiswa_id);
        $('#status_verifikasi').val(status_verifikasi);
        $('#no_gugus').val(no_gugus);

    });

    $(document).on('click','#delete', function(){
        var id_delete = $(this).data('id_delete');    
        var nama_delete = $(this).data('nama_delete');   
        $('#id_delete').val(id_delete);
        $('#nama_delete').text(nama_delete);

    });   
});
</script>

@endsection    

    </body>
</html>