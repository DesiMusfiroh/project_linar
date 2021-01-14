<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Cocarde extends Model
{
    protected $table = 'cocarde';
    protected $fillable = ['admin_id','cocarde'];
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
