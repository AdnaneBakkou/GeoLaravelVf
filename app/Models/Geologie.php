<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geologie extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'table_1' => 'array',
        'table_2' => 'array',
        'sites' => 'array'
    ];
}
