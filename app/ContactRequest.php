<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class
ContactRequest extends Model
{
    protected $table ='contacts';
    protected $fillable = ['firstname', 'lastname', 'email', 'phone', 'thema', 'rechtsschutz', 'rechtsvertretung'];
}
