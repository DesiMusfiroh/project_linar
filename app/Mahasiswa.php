<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [ 'nama_lengkap','users_id','nim','prodi','fakultas','universitas','jalur_penerimaan','angkatan',
                            'no_hp','alamat','tanggal_lahir','asal_sekolah','file_foto'];

    public function users() {
        return $this->belongsTo(User::class);
    }
    public function pendaftaran()
    {
    	return $this->hasOne(Pendaftaran::class,'pendaftaran_id');
    }
}
