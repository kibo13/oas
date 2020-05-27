<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'organization_id',
        'street_id',
        'type_job',
        'type_off',
        'desc',
        'date_on',
        'time_on',
        'date_off',
        'time_off',
        'num_home',
        'num_corp'
    ];

    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization');
    }
}
