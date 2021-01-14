<html>
<body>
    <a href="{{ URL::to('siswa') }}">Laravelku</a>
        <ul>
            <li><a href=" {{ URL::to('siswa') }}"> Melihat Semua Siswa</a></li>
            <li><a href=" {{ URL::to('siswa/create') }}"> Membuat Siswa</a></li>
        </ul>
    
    <h1>Semua siswa</h1>
	@if (Session::has('message'))
	{{Session::get('message')}}
	@endif

    <table>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No HP</td>
        </tr>
        
        @foreach($siswa as $key => $value)
        <tr>
            <td>{{ $value->id_siswa }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->no_hp }}</td>            
            <td>
                <a href="/siswa/edit/{{ $value->id_siswa }}">Edit</a>
                <a href="/siswa/delete/{{ $value -> id_siswa }}"> Hapus </a>
            </td> 
        </tr>
        @endforeach
    </table>
</body>
</html>