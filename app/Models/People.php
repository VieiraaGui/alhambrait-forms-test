<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'id', 'name', 'birthday', 'cep', 'address', 'number',
        'city', 'state', 'tel', 'celphone'
    ];
    const STATUS_FORM = [
        1 => 'pendente',
        2 => 'concluido'
    ];

    const STEP_FORM = [
        1 => 'Step_1',
        2 => 'Step_2',
        3 => 'Step_3'
    ];

}

