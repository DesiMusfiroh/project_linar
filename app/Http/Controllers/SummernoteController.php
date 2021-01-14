<?php

namespace App\Http\Controllers;

use App\Summernote;
use Illuminate\Http\Request;

class SummernoteController extends Controller
{
 
    public function getSummernoteeditor()
    {
        return view('informasi');
    }
 
    public function postSummernoteeditor(Request $request)

    {
 $this->validate($request, [
            'detail' => 'required',
 
 'feature' => 'required',
        ]);
        $detail=$request->input('detail');
 $feature=$request->input('feature');
        $dom = new \DomDocument();
        $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $data = base64_decode($data);
            $image_name= "/upload/" . time().$k.'.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $data);
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $detail = $dom->saveHTML();
        $summernote = new Summernote;
        $summernote->content = $detail;
 $summernote->Feature=$feature;
        $summernote->save();

 echo "<h1>Feature</h1>" , $feature;
 echo "<h2>Details</h2>" , $detail;
    }
 }