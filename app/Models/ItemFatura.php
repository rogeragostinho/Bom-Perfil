<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemFatura extends Model
{
    use HasFactory;

    protected $table = 'itens_fatura';

    protected $fillable = [
        'fatura_id',
        'produto_id',
        'preco',
        'quantidade',
    ];
}
