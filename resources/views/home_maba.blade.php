<html>
<head>
    <style>
        .tombol{
            height:100px; width:150px; background-color:#40016e; color: white; border-radius:30px; margin:10px;
        }
        .tombol:hover{
            background-color: #99decc; color:#40016e;
        }
     
    </style>

</head>
<body>
@extends('layouts.layout_maba')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="alert text-center" style="background-color:#99decc" role="alert">
                <h3> <div style="font-family:maiandra gd; font-weight:bold;" > <i class="fa fa-home" aria-hidden="true"></i> Dashboard </div></h3>
            </div>
        </div>
    </div>

    <br>

    <h2 class="text-center"> Selamat Datang di Website Linar</h2>
    <h5 class="text-center">Anda login sebagai Mahasiswa Baru</h5>
    <div class="container">
        <h3>Apa itu LINAR ??</h3>
        <p>Linar atau "Klik untuk Daftar" adalah sebuah website sistem informasi pendaftaran kegiatan PKK-MB (Pengenalan Kehidupan Kampus - Mahasiswa Baru)
        yang dibuat untuk mempermudah proses pendaftaran PKK-MB bagi mahasiswa baru, serta mempercepat proses pendataan mahasiswa baru yang mendaftar kegiatan PKK-MB bagi admin panitia.</p>
    </div>
    <hr> <h3  class="text-center">Petunjuk Penggunaan Website Linar</h3> 

    <div class="btn-toolbar justify-content-center" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="First group">
            <a href="/mahasiswa"> <button type="button" class="tombol" > 1. Lengkapi Data Diri Anda </button>  </a>
        </div>
        <i class="fa fa-arrow-right mt-5"></i>
        <div class="btn-group mr-2" role="group" aria-label="Second group">
            <a href="/pilih_pkkmb"> <button type="button" class="tombol"> 2. Pilih PKK-MB yang akan diikuti  </button> </a> 
        </div>
        <i class="fa fa-arrow-right mt-5"></i>
        <div class="btn-group" role="group" aria-label="Third group">
            <a href="#"> <button type="button" class="tombol"> 3. Lakukan Pendaftaran <br> PKK-MB </button> </a> 
        </div>
        <i class="fa fa-arrow-right mt-5"></i>
        <div class="btn-group" role="group" aria-label="Fourth group">
            <a href="#"> <button type="button" class="tombol"> 4. Download Cocarde dan Twibbon PKK-MB </button> </a> 
        </div>
        <i class="fa fa-arrow-right mt-5"></i>
        <div class="btn-group" role="group" aria-label="Fifth group">
            <a href="#"> <button type="button" class="tombol" > 5. Lihat Informasi seputar PKK-MB yang dipilih </button> </a> 
        </div>      
    </div>

    <hr> 
    <p class="text-center" style="font-weight:bold;">&copy Sistem Informasi 2018</p>

</div>
@endsection

</body>
</html>
