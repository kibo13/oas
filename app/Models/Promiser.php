<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promiser extends Model
{
    protected $fillable = [
        'address_id',
        'num_flat',
        'date_on',
        'date_off'
    ];

    // many 
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }
}
