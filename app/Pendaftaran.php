<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Mahasiswa;
use App\Pendaftaran;

class Pendaftaran extends Model
{
    protected $table ='pendaftaran';
    protected $fillable = ['admin_id','mahasiswa_id','status_verifikasi','gugus'];

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class);
    }    
    
    public function admin() {
        return $this->belongsTo(Admin::class);
    } 
  
}
