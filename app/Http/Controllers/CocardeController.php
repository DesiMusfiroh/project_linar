<?php

namespace App\Http\Controllers;

use App\Cocarde;
use App\Admin;
use App\Pendaftaran;
use App\Mahasiswa;
use Illuminate\Http\Request;

class CocardeController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('/upload_cocarde');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'cocarde' => 'required|file|image|mimes:pdf,png,jpg,jpeg|max:2048',
            'admin_id' => 'required'
        ]);

        $file = $request->file('cocarde');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $cocarde = Cocarde::create([
            'cocarde' =>$nama_file,
            'admin_id' => $request->admin_id,
        ]);

        return redirect("upload_cocarde")
        ->withSuccess('Great! file has been successfully uploaded.');
  
    }


    public function edit($id)
    {
        $cocarde = Cocarde::find($id);
        return view('edit_cocarde', ['cocarde' => $cocarde]);  
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'cocarde' => 'required|file|image|mimes:pdf,png,jpg,jpeg|max:2048',
            'admin_id' => 'required'
        ]);

        $file = $request->file('cocarde');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);

        $update = [
            'cocarde' =>$nama_file,
            'admin_id' => $request->admin_id,
        ];

        Cocarde::whereId($id)->update($update);
   
        return redirect('/upload_cocarde')
       ->with('success','Great! File Cocarde berhasil di update');
    }
    public function show($id)
    {
       
        $cocarde = Cocarde::where('admin_id', $id )->get();
        $admin_pendaftaran = Admin::find($id);
        return view('download_cocarde',['cocarde' => $cocarde],  compact('admin_pendaftaran'));
    }

    public function download($id)
    {
       // $twibbon = Twibbon::where('id', $id)->firstOrFail();
        //$path =  public_path(). '/data_file/'. $twibbon_name->$twibbon;
        //return response()->download($path, $twibbon_name
         //        ->original_filename, ['Content-Type' => $twibbon_name->mime]);
    }
    public function destroy(Cocarde $cocarde)
    {
        //
    }
}
