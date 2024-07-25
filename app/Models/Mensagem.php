<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'mensagem',
        'objetivo',
        'telefone',
        'email'
    ];

    protected $attributes = [
        'nome' => null,
        'mensagem' => null,
        'objetivo' => null,
        'telefone' => null,
        'email' => null
    ];
}
