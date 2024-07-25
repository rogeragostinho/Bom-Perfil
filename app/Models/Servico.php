<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco',
        'imagem_url',
        'categoria',
        'descricao'
    ];

    protected $attributes = [
        'imagem_url' => null,
        'categoria' => null,
        'descricao' => null
    ];
}
