<html>
<body>
	<a href="{{ URL::to('siswa')}}">Laravelku</a>
	<ul><li><a href="{{URL::to('siswa')}}">Melihat semua siswa</a></li>
	<li><a href="{{URL::to('siswa/create')}}">Membuat siswa</a></li>
	</ul>

	<h1>Membuat siswa</h1>
	<form method="POST" action="{{URL::to('siswa')}}">
		@csrf
		ID Siswa:<br>
		<input type="text" name="id_siswa"><br>
		Nama:<br>
		<input type="text" name="nama"><br>
		Alamat:<br>
		<input type="text" name="alamat"><br>
		No HP:<br>
		<input type="text" name="no_hp"><br>
		<br><br>
		<input type="submit" value="Submit"><br>
	</form>
</body>
</html>

<?php /* 
use Illuminate\Support\Facades\Form;
?>
<html>
    <body>
        <a href="{{ URL::to('siswa') }}">Laravelku</a>
        <ul>
            <li><a href=" {{ URL::to('siswa') }}">Melihat Semua Siswa</a></li>
            <li><a href=" {{ URL::to('siswa/create') }}">Membuat Siswa</a></li>
        </ul>
        <h1>Membuat Siswa</h1>
        <form method="POST" action="/siswa/store">
            	
            {{ csrf_field() }}
            ID Siswa : <br>
            <input type="text" name="id"> <br>
            Nama : <br>
            <input type="text" name="nama"> <br>
            Alamat : <br>
            <input type="text" name="alamat"> <br>
            Nomor HP : <br>
            <input type="text" name="no_hp"> <br>
            <input type="submit" value="submit"> <br>
        </form>
    </body>
</html>
<?php
use Illuminate\Support\Facades\Form; */
?> 