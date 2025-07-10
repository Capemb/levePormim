<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PedidosController extends Controller
{
    function index(Request $request): View{

        $pedidos = pedido::when($request->has('search'), function($query) use($request){
            $query->where('primeiro_nome','%LIKE',"%$request->search%")
                ->orWhare('ultimo_nome','%LIKE',"%$request->search%");
        } )->OrderBy('id',$request->has('order') && $request->order == 'asc' ? 'ASC':'DESC')->get();

        return view('pedidos', compact('pedidos'));

    }

    public function edit($id)
    {
        $pedidos = pedido::findOrFail($id);
        return view('editpedidos', compact('pedidos'));
    }

     public function update(Request $request, string $id)
    {
        $pedidos = pedido::findOrFail($id);
        $pedidos->primeiro_nome = $request->input('primeiro_nome');
        $pedidos->ultimo_nome = $request->input('ultimo_nome');
        $pedidos->numero_remetente = $request->input('numero_remetente');
        $pedidos->numero_receptor = $request->input('numero_receptor');
        $pedidos->artigo_recolha = $request->input('artigo_recolha');
        $pedidos->data_recolha = $request->input('data_recolha');
        $pedidos->municipio_recolha = $request->input('municipio_recolha');
        $pedidos->distrito_recolha = $request->input('distrito_recolha');
        $pedidos->ultimo_nome_receptor = $request->input('ultimo_nome_receptor');
        $pedidos->numero_receptor_principal = $request->input('numero_receptor_principal');
        $pedidos->numero_receptor_altenativo = $request->input('numero_receptor_altenativo');
        $pedidos->municipio_entrega = $request->input('municipio_entrega');
        $pedidos->distrito_entrega = $request->input('distrito_entrega');
        $pedidos->save();

        return redirect()->route('pedidos');
    }

    public function destroy($id)
    {
        $pedidos = pedido::findOrFail($id);
        $pedidos->delete();
        return redirect()->route('pedidos');
    }

    




}
