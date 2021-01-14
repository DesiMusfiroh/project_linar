<?php
use Illuminate\Support\Facades\Form;
use Illuminate\Database\Query\Builder;

use App\Siswa;
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body>
    <a href="{{ URL::to('siswa') }}">Laravelku</a>
        <ul>
            <li><a href=" {{ URL::to('siswa') }}"> Melihat Semua Siswa</a></li>
            <li><a href=" {{ URL::to('siswa/create') }}"> Membuat Siswa</a></li>
        </ul>
    <h1> Edit Data Siswa </h1>
    <?php /*<form method="POST" action="/siswa/edit/{{ $siswa -> id }}"> */ ?>
    <form method="POST" action="/siswa/update/{{ $siswa->id_siswa }}" >
    {{csrf_field()}}
    {{ method_field('PUT') }}
        
        ID Siswa : <br>
            <input type="text" name="id_siswa" value="{{ $siswa->id_siswa }}"> <br>

            @if($errors->has('id_siswa'))
                <div class="text-danger">
                    {{ $errors->first('id_siswa')}}
                </div>
            @endif

        Nama : <br>
            <input type="text" name="nama" value="{{ $siswa->nama }}"> <br>

            @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
            @endif

        Alamat : <br>
            <input type="text" name="alamat" value="{{ $siswa->alamat }}"> <br>

            @if($errors->has('alamat'))
                <div class="text-danger">
                     {{ $errors->first('alamat')}}
                </div>
            @endif

        Nomor HP : <br>
            <input type="text" name="no_hp" value="{{ $siswa->no_hp }}"> <br>

            @if($errors->has('no_hp'))
                <div class="text-danger">
                     {{ $errors->first('no_hp')}}
                </div>
            @endif

            <input type="submit" value="submit"> <br>
    </form>

   