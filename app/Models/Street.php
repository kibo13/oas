<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = [
        'name',
    ];

    public function workers()
    {
        return $this->hasMany('App\Models\Worker');
    }
}
