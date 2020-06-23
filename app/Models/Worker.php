<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
        'branch_id', 
        'position_id',
        'address_id',
        'num_flat',
        'first_name',
        'last_name',
        'mid_name',
        'work_phone',
        'mob_phone',
        'home_phone'
    ];

    // many 
    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function position()
    {
        return $this->belongsTo('App\Models\Position');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
