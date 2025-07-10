<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = [
        
        'primeiro_nome',
        'ultimo_nome',
        'numero_remetente',
        'numero_receptor',
        'municipio_recolha',
        'distrito_recolha',
        'motoboy_id',
        'artigo_recolha',
        'data_recolha',
        'hora_recolha',
        'primeiro_nome_receptor',
        'ultimo_nome_receptor',
        'numero_receptor_principal',
        'numero_receptor_altenativo',
        'municipio_entrega',
        'distrito_entrega',
        'descricao',
        'status',
    ];

    public function motoboy()
    {
        return $this->belongsTo(Motoboy::class, 'motoboy_id');
    }
}
