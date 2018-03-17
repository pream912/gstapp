<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
    public function gstr()
    {
        return $this->hasMany('App\Gstr');
    }
}
