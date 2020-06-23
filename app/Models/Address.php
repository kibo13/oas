<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street_id',
        'num_home'
    ];

    // one 
    public function workers()
    {
        return $this->hasMany('App\Models\Worker');
    }

    public function promisers()
    {
        return $this->hasMany('App\Models\Promiser');
    }

    // many 
    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    // many to many 
    public function plots()
    {
        return $this->belongsToMany('App\Models\Plot');
    }

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job');
    }
    
}
