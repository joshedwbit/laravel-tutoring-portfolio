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
        'notes',
    ];

    function buildPaperData(): array
    {
        $season = $this->season === 'Summer' ? 'jun' : 'nov';
        $band = $this->higher ? 'high' : 'found';
        $base = "{$this->year}-{$season}";
        $paperBase = "{$base}-{$this->paper_number}-{$band}";

        return [
            'folder' => $base,
            'questionSubfolder' => "{$paperBase}-qs",
            'markSchemeSubfolder' => "{$paperBase}-ms",
            'question' => "{$paperBase}-qs-{$this->question_number}.JPG",
            'markScheme' => "{$paperBase}-ms-{$this->question_number}.JPG",
        ];
    }
}
