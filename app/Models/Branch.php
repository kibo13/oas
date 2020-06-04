<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name'];

    public function workers()
    {
        return $this->hasMany('App\Models\Worker');
    }

    public function bids()
    {
        return $this->hasMany('App\Models\Bid');
    }

    public function plots()
    {
        return $this->hasMany('App\Models\Plot');
    }
}
