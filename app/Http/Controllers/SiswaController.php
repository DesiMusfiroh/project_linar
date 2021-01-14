<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Query\Builder;
use DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        //dd($siswa);
        return view('siswa.index', ['siswa' => $siswa]);
    }
    public function create()
    {
        return view('siswa.create');
    }
    
    public function store(request $request)
	{
		$siswa = new Siswa();
        $siswa->id_siswa = $request->id_siswa;
		$siswa->nama =$request->nama;
		$siswa->alamat =$request->alamat;
		$siswa->no_hp =$request->no_hp;
		$siswa->save();
			
		return Redirect:: to('siswa');
        }
   
    public function edit($id_siswa)
        {

            //$siswa = Siswa::find('id_siswa');
            $siswa =  DB::table('siswa')->where('id_siswa',$id_siswa);
           return view('siswa.edit', ['siswa' => $siswa]);
        }
        
    public function update($id_siswa, Request $request)
        {
            $this->validate($request, [
                'id_siswa' => 'required',
                'nama' => 'required',
                'alamat' => 'required',
                'no_hp' => 'required'
            ]);
         
            //$siswa = Siswa::find($id_siswa);
            $siswa =  DB::table('siswa')->where('id_siswa',$id_siswa);
            $siswa->nama = $request->nama;
            $siswa->alamat = $request->alamat;
            $siswa->no_hp = $request->no_hp;
            $siswa->save();
            return redirect('/siswa');
        }
    public function delete($id_siswa)
        {
            
            $siswa =  DB::table('siswa')->where('id_siswa',$id_siswa);
            $siswa->delete();
            return redirect('/siswa');
        }
}
?>
