<?php

namespace App\Http\Controllers;

use App\Pkkmb;
use App\User;
use App\Admin;
use Illuminate\Http\Request;

class PkkmbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tema_pkkmb');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
            'admin_id' => 'required',
            'tema' => 'required',
            
        ]);

        Pkkmb::create([
            'admin_id' => $request->admin_id,
            'tema' => $request->tema,
          
        ]);     
        return redirect('/tema_pkkmb');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pkkmb  $pkkmb
     * @return \Illuminate\Http\Response
     */
    public function show(Pkkmb $pkkmb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pkkmb  $pkkmb
     * @return \Illuminate\Http\Response
     */
    public function edit_logo($id)
    {
        $pkkmb = Pkkmb::find($id);
        return view('logo_pkkmb', ['pkkmb' => $pkkmb]);
    }
    public function edit(Pkkmb $pkkmb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pkkmb  $pkkmb
     * @return \Illuminate\Http\Response
     */
 /*   public function update_logo(Request $request)
    {
        Pkkmb::where('id', $request->input('id'))->update([
           
            'logo' => $request->input('logo'),
            'deskripsi_logo' => $request->input('deskeipsi_logo'),
          ]);

         return redirect('/logo_pkkmb');
    }
    */
  
    public function update_logo(Request $request)
    {
        $pkkmb = Pkkmb::where('id',$request->id)->update([
            'logo' => $request->logo,
            'deskripsi_logo' => $request->deskripsi_logo
        ]);
        return view('mascot_pkkmb');
    }
    public function update(Request $request, Pkkmb $pkkmb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pkkmb  $pkkmb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pkkmb $pkkmb)
    {
        //
    }
}
