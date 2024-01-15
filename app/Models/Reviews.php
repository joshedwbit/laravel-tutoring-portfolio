<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'school',
        'year_group',
        'predicted',
        'achieved',
        'rating',
        'comments',
        'passcode',
    ];
}
