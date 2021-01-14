<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
use App\Pkkmb;
use App\User;
use App\Twibbon;
use App\Cocarde;
use App\Pendaftaran;
use App\Informasi;


class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [ 'users_id','jenis_pkkmb','nama_universitas','nama_fakultas','tahun','jumlah_gugus' ];

    //relasi one to one dengan users
    public function users() {
        return $this->belongsTo(User::class);
    }

    //relasi one to one dengan pkkmb
    public function pendaftaran()
    {
    	return $this->hasOne(Pendaftaran::class,'admin_id');
    }
    public function twibbon()
    {
    	return $this->hasOne(Twibbon::class,'admin_id');
    }
    public function cocarde()
    {
    	return $this->hasOne(Cocarde::class,'admin_id');
    }
    public function informasi()
    {
    	return $this->hasOne(Informasi::class,'admin_id');
    }
}
