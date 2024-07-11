<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdjustmentAnswer extends Model
{
    use HasFactory;

    protected $table = 'adjustment_answers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'statement_1', 'statement_2', 'statement_3', 'statement_4', 'statement_5',
        'statement_6', 'statement_7', 'statement_8', 'statement_9', 'statement_10',
        'statement_11', 'statement_12', 'statement_13', 'statement_14', 'statement_15',
        'statement_16', 'statement_17', 'statement_18', 'statement_19', 'statement_20',
        'statement_21', 'statement_22', 'statement_23',
    ];
}
