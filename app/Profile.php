<?php

namespace App;

use \Awobaz\Compoships\Compoships;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['user_id', 'avatar', 'facebook', 'youtube', 'about'];
}
