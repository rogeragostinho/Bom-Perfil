<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoPedido extends Model
{
    use HasFactory;
    
    protected $table = 'produtos_pedido';

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'quantidade'
    ];
}
