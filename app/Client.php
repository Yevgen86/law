<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'email','tel', 'address', 'plz', 'city', 'country',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function appointments() {
        return $this->hasMany('App\Appointment');
    }

    public function documentations() {
        return $this->hasMany('App\Documentation')->orderBy('id', 'desc')  ;
    }
}
