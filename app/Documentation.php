<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentation extends Model
{
    protected $fillable = [
        'name', 'link',
    ];
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function client() {
        return $this->belongsTo('App\Client', 'client_id');
    }
}
