<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicoPedido extends Model
{
    use HasFactory;

    protected $table = 'servicos_pedido';

    protected $fillable = [
        'pedido_id',
        'servico_id'
    ];
}
