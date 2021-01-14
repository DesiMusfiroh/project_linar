<?php

namespace App\Http\Controllers;

use App\Twibbon;
use App\Admin;
use App\Pendaftaran;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TwibbonController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('/upload_twibbon');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'twibbon' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'admin_id' => 'required'
        ]);
        $file = $request->file('twibbon'); 
        $nama_file = time()."_".$file->getClientOriginalName(); 
        $tujuan_upload = 'data_file'; 
        $file->move($tujuan_upload,$nama_file); 
        Twibbon::create([
            'twibbon' =>$nama_file,
            'admin_id' => $request->admin_id,
        ]);

         return redirect("upload_twibbon")
         ->withSuccess('Great! file has been successfully uploaded.');
	}

    public function edit($id)
    {
        $twibbon = Twibbon::find($id);
        return view('edit_twibbon', ['twibbon' => $twibbon]);  
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'twibbon' => 'required|file|image|mimes:png,jpg,jpeg|max:2048',
            'admin_id' => 'required'
        ]);

        $file = $request->file('twibbon'); 
        $nama_file = time()."_".$file->getClientOriginalName(); 
        $tujuan_upload = 'data_file'; 
        $file->move($tujuan_upload,$nama_file); 

        $update = [
            'twibbon' =>$nama_file,
            'admin_id' => $request->admin_id,
        ];

        Twibbon::whereId($id)->update($update);
   
        return redirect('/upload_twibbon')
       ->with('success','Great! File twibbon berhasil di update');
    }

    public function show($id)
    {              
        $twibbon = Twibbon::where('admin_id', $id )->get();
        $admin_pendaftaran = Admin::find($id);
        return view('download_twibbon',['twibbon' => $twibbon], compact('admin_pendaftaran'));
    }

    public function download($id)
    {
        $twibbon = Twibbon::where('id', $id)->firstOrFail();
        $path =  public_path(). '/data_file/'. $twibbon_name->$twibbon;
        //return response()->download($path, $twibbon_name
         //        ->original_filename, ['Content-Type' => $twibbon_name->mime]);
        
        return Storage::download($path, $twibbon_name);

        //return Storage::download('file.jpg', $name, $headers);
    }
    public function destroy(Twibbon $twibbon)
    {
        //
    }
}
