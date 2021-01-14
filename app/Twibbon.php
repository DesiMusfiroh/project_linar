<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Twibbon extends Model
{
    protected $table = 'twibbon';
    protected $fillable = ['admin_id','twibbon'];
    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
