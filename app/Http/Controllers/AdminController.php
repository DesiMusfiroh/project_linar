<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
    	$admin = Admin::all(); 
        return view('pilih_pkkmb', ['admin' => $admin]);
    }

    public function create()
    {
        return view('data_pkkmb');
    }

    public function store(Request $request)
    {
        $request->validate ([
            'users_id' => 'required',
            'jenis_pkkmb' => 'required',
            'nama_fakultas' => 'required',
            'nama_universitas' => 'required',
            'tahun' => 'required',
            'jumlah_gugus' => 'required',
        ]);

        Admin::create([
            'users_id' => $request->users_id,
            'jenis_pkkmb' => $request->jenis_pkkmb,
            'nama_fakultas' => $request->nama_fakultas,
            'nama_universitas' => $request->nama_universitas,
            'tahun' => $request->tahun,
            'jumlah_gugus' => $request->jumlah_gugus,
        ]);
        
        return redirect('/admin')
        ->with('success','Great! Data PKKMB berhasil di simpan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('edit_data_pkkmb', ['admin' => $admin]);  
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'users_id' => 'required',
            'jenis_pkkmb' => 'required',
            'nama_fakultas' => 'required',
            'nama_universitas' => 'required',
            'tahun' => 'required',
            'jumlah_gugus' => 'required',
        ]);
         
        $update = [
            'users_id' => $request->users_id,
            'jenis_pkkmb' => $request->jenis_pkkmb,
            'nama_fakultas' => $request->nama_fakultas,
            'nama_universitas' => $request->nama_universitas,
            'tahun' => $request->tahun,
            'jumlah_gugus' => $request->jumlah_gugus,
        ];

        Admin::whereId($id)->update($update);
   
        return redirect('/admin')
       ->with('success','Great! Data PKKMB berhasil di update');
    }

    public function destroy($id)
    {
        //
    }
}
