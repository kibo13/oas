<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = [
        'name',
    ];

    // one 
    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }
}
