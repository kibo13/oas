<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promiser extends Model
{
    protected $fillable = [
        'street_id',
        'num_home',
        'num_corp',
        'num_flat',
        'date_on',
        'date_off'
    ];

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }
}
