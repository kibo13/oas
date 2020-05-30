<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    protected $fillable = [
        'date_brief',
        'temp',
        'pressure',
        'hw_tst',
        'hw_tbk',
        'hw_pst',
        'hw_pbk',
        'cw_r',
        'cw_ot',
        'cw_tf',
        'cw_fs',
        'cw_s'
    ];
}
