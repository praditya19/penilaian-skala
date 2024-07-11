<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionSelfEsteem extends Model
{
    use HasFactory;

    protected $table = 'questions_self_esteem';

    protected $fillable = [
        'question_text',
    ];
}
