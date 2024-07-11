<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelfEsteemAnswer extends Model
{
    use HasFactory;

    protected $table = 'self_esteem_answers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'statement_1', 'statement_2', 'statement_3', 'statement_4', 'statement_5',
        'statement_6', 'statement_7', 'statement_8', 'statement_9', 'statement_10',
        'statement_11', 'statement_12', 'statement_13', 'statement_14', 'statement_15',
        'statement_16', 'statement_17', 'statement_18', 'statement_19', 'statement_20',
        'statement_21', 'statement_22', 'statement_23', 'statement_24', 'statement_25',
        'statement_26', 'statement_27', 'statement_28', 'statement_29', 'statement_30',
        'statement_31', 'statement_32', 'statement_33', 'statement_34', 'statement_35',
        'statement_36', 'statement_37', 'statement_38', 'statement_39', 'statement_40',
        'statement_41', 'statement_42', 'statement_43', 'statement_44', 'statement_45',
    ];
}
