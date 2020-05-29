<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'bid_id',
        'solution',
        'date_loc',
        'time_loc',
        'prim'
    ];

    public function bid()
    {
        return $this->belongsTo('App\Models\Bid');
    }
}
