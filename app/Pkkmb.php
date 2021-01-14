<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Pkkmb extends Model
{
    protected $table ='pkkmb';
    protected $fillable = ['admin_id','tema'];

    //relasi one to one dengan admin
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
