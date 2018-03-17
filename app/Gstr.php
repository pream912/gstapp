<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gstr extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
