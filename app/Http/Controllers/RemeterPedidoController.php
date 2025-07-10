<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\remeter;
use App\Models\pedido;
use Illuminate\View\View;

class RemeterPedidoController extends Controller
{
    public function index(){
        return view('remeterpedido');
    }

  


    
}
