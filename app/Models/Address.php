<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'street_id',
        'num_home'
    ];

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    public function plots()
    {
        return $this->belongsToMany('App\Models\Plot');
    }

    public function jobs()
    {
        return $this->belongsToMany('App\Models\Job');
    }
}
