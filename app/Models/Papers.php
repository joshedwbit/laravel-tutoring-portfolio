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

        $questionSubfolder = "{$paperBase}-qs";
        $markSchemeSubfolder ="{$paperBase}-ms";
        $question = "{$paperBase}-qs-{$this->question_number}.JPG";
        $markScheme = "{$paperBase}-ms-{$this->question_number}.JPG";

        $questionPath = 'images/resources/' . $folder . '/' . $questionSubfolder . '/' . $question;
        $markSchemePath = 'images/resources/' . $folder . '/' . $markSchemeSubfolder . '/' . $markScheme;

        $questionImagePath = public_path($questionPath);
        $markSchemeImagePath = public_path($markSchemePath);

        $questionExists = File::exists($questionImagePath);
        $markSchemeExists = File::exists($markSchemeImagePath);

        return [
            'questionExists' =>  $questionExists,
            'markSchemeExists' => $markSchemeExists,
            'questionPath' => $questionPath,
            'markSchemePath' => $markSchemePath,
        ];
    }
}
