<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = [
        'branch_id',
        'street_id',
        'num_home',
        'num_corp'
    ];
    
    public function street()
    {
        return $this->belongsTo('App\Models\Street');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }
}
