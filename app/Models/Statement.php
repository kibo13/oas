<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $fillable = [
        'branch_id',
        'type_id',
        'defect_id',
        'date_in',
        'time_in',
        'street_id',
        'num_home',
        'num_flat',
        'last_name',
        'phone',
        'desc',
        'home_hw',
        'home_cw',
        'home_h',
        'crane_hw',
        'crane_cw',
        'crane_h',
        'date_off',
        'time_off',
        'solution',
        'receiver',
        'plot',
        'state'
    ];

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function defect()
    {
        return $this->belongsTo('App\Models\Defect');
    }   
}
