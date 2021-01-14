<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Admin;
use Appp\Mahasiswa;
use App\Pendaftaran;
use Auth;


class PendaftaranController extends Controller
{
    public function index()
    { 
        //$pendaftaran = Pendaftaran::all(); 
        //$pendaftaran = DB::table('pendaftaran')->where('admin_id', 'John')->first();
        // return data ke view
        $admin_id = Auth::user()->admin->id;
      
        $pendaftaran =  Pendaftaran::where('admin_id', $admin_id )->get();
        return view('data_mahasiswa', ['pendaftaran' => $pendaftaran]);
    }
    public function create($id)
    {
        $admin_pendaftaran = Admin::find($id);
        return view('/pendaftaran', compact('admin_pendaftaran'));
    }
 
    public function store(Request $request)
    {
        $request->validate ([
            'admin_id' => 'required',
            'mahasiswa_id' => 'required',
            'status_verifikasi' => 'required',
            
        ]);

        Pendaftaran::create([
            'admin_id' => $request->admin_id,
            'mahasiswa_id' => $request->mahasiswa_id,
            'status_verifikasi' => $request->status_verifikasi,
          
        ]);     
        return redirect()->back();
    }
    
    public function show(Pendaftaran $pendaftaran)
    {
        $admin_id = Auth::user()->admin->id;
        $pendaftaran =  Pendaftaran::where('admin_id', $admin_id )->get();
        $jumlah_gugus = Auth::user()->admin->jumlah_gugus;
        return view('/pembagian_gugus',['pendaftaran' => $pendaftaran], ['jumlah_gugus' => $jumlah_gugus]);
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }
    
    public function update(Request $request)
    {
        $pendaftaran = Pendaftaran::findOrFail($request->id);
        $pendaftaran->update($request->all());
        return redirect()->back();
    }
    public function delete(Request $request)
    {
        $pendaftaran = Pendaftaran::findOrFail($request->id);
		$pendaftaran->delete();
		return redirect()->back();
    }
}
