<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class motoboy extends Model
{
    protected $table = 'motoboys';

    protected $fillable = [
        
        'primeiro_nome',
        'ultimo_nome',
        'telefone_principal',
        'telefone_altenativo',
        'matricula',
        'data_inicio',
        'zona_servico',
        
    ];
    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'motoboy_id');
    }


}
