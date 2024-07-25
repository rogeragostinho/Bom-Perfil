<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'estado',
        'total',
        'cliente_nome',
        'cliente_email',
        'cliente_endereco',
        'cliente_telefone',
        'comentario'
    ];

    protected $atrributes = [
        'cliente_email' => null,
        'cliente_endereco' => null,
        'comentario' => null
    ];

    public function Produtos():BelongsToMany{
        return $this->belongsToMany(Produto::class, 'produtos_pedido', 'pedido_id', 'produto_id')->withPivot('quantidade');
    }
    public function Servicos():BelongsToMany{
        return $this->belongsToMany(Servico::class, 'servicos_pedido', 'pedido_id', 'servico_id');
    }
}
