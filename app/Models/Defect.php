<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Defect extends Model
{
    protected $fillable = [
        'type_id',
        'attachment',
        'desc'
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }
}
