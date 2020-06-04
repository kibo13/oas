<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    protected $fillable = [
        'name',
    ];

    public function addresses()
    {
        return $this->hasMany('App\Models\Address');
    }

    public function workers()
    {
        return $this->hasMany('App\Models\Worker');
    }

    public function promisers()
    {
        return $this->hasMany('App\Models\Promiser');
    }

    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }

    public function bids()
    {
        return $this->hasMany('App\Models\Bid');
    }
}
