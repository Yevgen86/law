<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public const SLOT_STATI = ['available', 'reserved', 'confirmed'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function client() {
        return $this->belongsTo('App\Client');
    }
}
