<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = [
        'branch_id', 
        'position_id',
        'street_id',
        'first_name',
        'last_name',
        'mid_name',
        'work_phone',
        'mob_phone',
        'home_phone',
        'num_home', 
        'num_flat', 
        'num_corp'
    ];

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
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
