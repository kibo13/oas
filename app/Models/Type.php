<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function promisers()
    {
        return $this->hasMany('App\Models\Promiser');
    }
}
