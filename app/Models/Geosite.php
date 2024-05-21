<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geosite extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'table' => 'array',
    ];
}
