<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'preco',
        'estoque',
        'imagem_url',
        'categoria',
        'descricao'
    ];

    protected $attributes = [
        'estoque' => null,
        'imagem_url' => null,
        'categoria' => null,
        'descricao' => null
    ];
}
