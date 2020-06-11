<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'organization_id',
        'type_job',
        'type_off',
        'desc',
        'date_on',
        'time_on',
        'date_off',
        'time_off'
    ];

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }

    public function addresses()
    {
        return $this->belongsToMany('App\Models\Address');
    }
}
