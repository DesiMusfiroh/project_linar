<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use App\Admin;
use Auth;


class InformasiController extends Controller
{
    public function create(){
       
        return view("informasi");
    }
    public function store(Request $request) 
    {
        $this->validate($request,[
            'admin_id' => 'required',
            'judul_informasi' => 'required',
            'isi_informasi' => 'required',         
            'poster_informasi' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $file = $request->file('poster_informasi');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        Informasi::create([
            'admin_id' => $request->admin_id,
            'judul_informasi' => $request->judul_informasi,
            'isi_informasi' => $request->isi_informasi,
            'poster_informasi' => $nama_file
        ]);
        
        return redirect('/informasi')
        ->with('success','Great! Informasi PKK-MB berhasil di simpan');
    }
    public function show()
    {
        $admin_id = Auth::user()->admin->id;
        $informasi = Informasi::where('admin_id', $admin_id )->get(); 
        return view('lihat_informasi',['informasi' => $informasi]);
    }
    public function edit($id)
    {
        $informasi = Informasi::find($id);
        return view('edit_informasi', ['informasi' => $informasi]);  
    }
    public function update(Request $request, $id)
    {
      $request->validate([
            'admin_id' => 'required',
            'judul_informasi' => 'required',
            'isi_informasi' => 'required',         
            'poster_informasi' => 'required',
        ]);

        $update = [
            'admin_id' => $request->admin_id,
            'judul_informasi' => $request->judul_informasi,
            'isi_informasi' => $request->isi_informasi,
            'poster_informasi' => $request->poster_informasi,
        ];

        Informasi::whereId($id)->update($update);
   
        return redirect('/lihat_informasi')
       ->with('success','Great! Informasi berhasil di update');
    }
    public function delete($id)
    {
        $informasi = Informasi::findOrFail($id);
        $informasi->delete();
        return redirect()->back()
        ->with('success','Great! Informasi berhasil di hapus');
    }
    public function show_maba($id)
    {
              
        $informasi = Informasi::where('admin_id', $id )->get();
        $admin_pendaftaran = Admin::find($id);
        return view('informasi_pkkmb',['informasi' => $informasi], compact('admin_pendaftaran'));
    }


}