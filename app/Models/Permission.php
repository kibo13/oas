<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'info'
    ];

    // many
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
