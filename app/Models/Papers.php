<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Papers extends Model
{
    use HasFactory;

    protected $fillable = [
        'year',
        'paper_number',
        'season',
        'calculator',
        'higher',
        'question_number',
        'topic',
    ];
}
