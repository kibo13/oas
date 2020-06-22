<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'statement_id',
        'date_log',
        'time_log',
        'solution',
        'receiver',
        'plot',
        'state'
    ];
    
    public function statement()
    {
        return $this->belongsTo('App\Models\Statement');
    }
}
