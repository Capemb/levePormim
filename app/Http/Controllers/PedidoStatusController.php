<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


use Illuminate\Http\Request;

class PedidoStatusController extends Controller
{
     public function update(pedido $pedido, string $status): RedirectResponse
    {
        $status = strtolower($status);

        if (!in_array($status, ['pendente', 'entregue', 'adiado'])) {
            return redirect()->back()->with('error', 'Status inválido.');
        }

        $pedido->status = $status;
        $pedido->save();

        return redirect()->back()->with('success', 'Status atualizado para ' . ucfirst($status));
    }
}
