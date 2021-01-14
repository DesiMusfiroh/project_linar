<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  
    public function index()
    {
        //
    }

    public function create()
    {
        return view('biodata');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'users_id' => 'required',
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'universitas' => 'required',
            'jalur_penerimaan' => 'required',
            'angkatan' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'file_foto' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        
        $file = $request->file('file_foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        Mahasiswa::create([
            'users_id' => $request->users_id,
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'universitas' => $request->universitas,
            'jalur_penerimaan' => $request->jalur_penerimaan,
            'angkatan' => $request->angkatan,
            'asal_sekolah' => $request->asal_sekolah,
            'no_hp' => $request->no_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'file_foto' => $nama_file,
        ]);
        
        return redirect('/mahasiswa')
        ->with('success','Great! Biodata berhasil di simpan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit_biodata', ['mahasiswa' => $mahasiswa]);  

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'users_id' => 'required',
            'nama_lengkap' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'fakultas' => 'required',
            'universitas' => 'required',
            'jalur_penerimaan' => 'required',
            'angkatan' => 'required',
            'asal_sekolah' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'file_foto' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $file = $request->file('file_foto');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $update = [
            'users_id' => $request->users_id,
            'nama_lengkap' => $request->nama_lengkap,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'fakultas' => $request->fakultas,
            'universitas' => $request->universitas,
            'jalur_penerimaan' => $request->jalur_penerimaan,
            'angkatan' => $request->angkatan,
            'asal_sekolah' => $request->asal_sekolah,
            'no_hp' => $request->no_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'file_foto' => $nama_file
        ];

        Mahasiswa::whereId($id)->update($update);
   
        return redirect('/mahasiswa')
       ->with('success','Great! Biodata berhasil di update');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
