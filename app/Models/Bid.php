<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = [
        'branch_id',
        'type_id',
        'street_id',
        'defect_id',
        'num_home',
        'num_flat',
        'last_name',
        'phone',
        'date_in',
        'time_in'
    ];


    public function logs()
    {
        return $this->hasMany('App\Models\Log');
    }

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function defect()
    {
        return $this->belongsTo('App\Models\Defect');
    }
}
