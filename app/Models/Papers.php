<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
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

    public function buildPaperData(): array
    {
        $season = $this->season === 'Summer' ? 'jun' : 'nov';
        $band = $this->higher ? 'high' : 'found';

        $folder = "{$this->year}-{$season}";
        $paperBase = "{$folder}-{$this->paper_number}-{$band}";

        $questionPath = "images/resources/{$folder}/{$paperBase}-qs/{$paperBase}-qs-{$this->question_number}.JPG";
        $markSchemePath = "images/resources/{$folder}/{$paperBase}-ms/{$paperBase}-ms-{$this->question_number}.JPG";

        return [
            'questionExists' => File::exists(public_path($questionPath)),
            'markSchemeExists' => File::exists(public_path($markSchemePath)),
            'questionPath' => $questionPath,
            'markSchemePath' => $markSchemePath,
        ];
    }
}
