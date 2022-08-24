<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'name',
        'opening',
        'pause_start',
        'pause_end',
        'ending',
        'place_id   '
    ];
}
