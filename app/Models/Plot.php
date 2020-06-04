<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = ['branch_id'];

    public function addresses()
    {
        return $this->belongsToMany('App\Models\Address');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
