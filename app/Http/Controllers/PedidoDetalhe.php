<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\pedido;

use Illuminate\Http\Request;

class PedidoDetalhe extends Controller
{
    public function show(string $id)
    {
        $pedidos = pedido::with('motoboy')->findOrFail($id);
        return view('pedidodetalhe',compact('pedidos'));
    }


}
