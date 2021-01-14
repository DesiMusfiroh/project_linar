<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Informasi extends Model
{
    protected $table = 'informasi';
    protected $fillable = ['admin_id','judul_informasi','isi_informasi','poster_informasi'];
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
