<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjustmentQuestion extends Model
{
    use HasFactory;

    protected $table = 'questions_adjustment';

    protected $fillable = [
        'question_text',
    ];
}
