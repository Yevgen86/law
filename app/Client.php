<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'user_id', 'firstname', 'lastname', 'email', 'country', 'city', 'plz', 'address'
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function appointments() {
        return $this->hasMany('App\Appointment');
    }
}
