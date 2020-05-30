<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'bid_id',
        'date_log',
        'time_log',
        'type_log',
        'solution',
        'note',
        'home_hw',
        'home_cw',
        'home_h',
        'crane_hw',
        'crane_cw',
        'crane_h'
    ];

    public function bid()
    {
        return $this->belongsTo('App\Models\Bid');
    }
}
