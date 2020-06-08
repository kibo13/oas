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

    public function defects()
    {
        return $this->hasMany('App\Models\Defect');
    }

    public function bids()
    {
        return $this->hasMany('App\Models\Bid');
    }

    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }
}
