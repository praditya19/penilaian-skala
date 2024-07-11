<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilySupportQuestion extends Model
{
    use HasFactory;

    protected $table = 'questions_family_support';

    protected $fillable = [
        'question_text',
    ];
}
