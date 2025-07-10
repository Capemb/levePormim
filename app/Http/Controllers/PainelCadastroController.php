<?php

namespace App\Http\Controllers;
use App\Models\pedido;
use App\Models\motoboy;
use App\Http\Requests\StorePedidoRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\MimoSmsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


class PainelCadastroController extends Controller
{

     protected $sms;

    public function __construct(MimoSmsService $sms)
    {
        $this->sms = $sms;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $motoboys = Motoboy::all();  // ou pode usar seu filtro de busca e ordenação aqui também
           return view('painelinicio', compact('motoboys'));

    }

    function store(Request $request)
    {

       
        $pedido = new pedido();
        $pedido->primeiro_nome = $request->input('primeiro_nome');
        $pedido->ultimo_nome = $request->input('ultimo_nome');
        $pedido->numero_remetente = $request->input('numero_remetente');
        $pedido->numero_receptor = $request->input('numero_receptor');
        $pedido->artigo_recolha = $request->input('artigo_recolha');
        $pedido->data_recolha = $request->input('data_recolha');   
        $pedido->hora_recolha = $request->input('hora_recolha');   // Corrigido
        $pedido->municipio_recolha = $request->input('municipio_recolha');  // Corrigido typo
        $pedido->distrito_recolha = $request->input('distrito_recolha');
        $pedido->motoboy_id = $request->input('motoboy_id');

        $pedido->primeiro_nome_receptor = $request->input('primeiro_nome_receptor');
        $pedido->ultimo_nome_receptor = $request->input('ultimo_nome_receptor');
        $pedido->numero_receptor_principal = $request->input('numero_receptor_principal');
        $pedido->numero_receptor_altenativo = $request->input('numero_receptor_altenativo');

        $pedido->municipio_entrega = $request->input('municipio_entrega');  // Corrigido typo
        $pedido->distrito_entrega = $request->input('distrito_entrega');
        $pedido->descricao = $request->input('descricao');  // Se houver descrição, inclua aqui

             $pedido->save();    
          
           $motoboy = $pedido->motoboy;

                if ($motoboy && $motoboy->telefone_principal) {
                    $msg = "Olá {$motoboy->primeiro_nome}, novo pedido #{$pedido->id} "
                        . "para recolher {$pedido->artigo_recolha} às {$pedido->hora_recolha} "
                        . "em {$pedido->distrito_recolha}. segue o link para confirmar a entrega";

                    $response = Http::post("http://52.30.114.86:8080/mimosms/v1/message/send?token=" . config('services.mimo.token'), [
                        'sender' => 'PARALEX', // substitui com o senderid correto
                        'recipients' => $motoboy->telefone_principal,
                        'text' => $msg,
                    ]);

                    // Para debug
                    Log::info('Resposta da API Mimo:', ['resposta' => $response->body()]);
                }


            return redirect()->intended(route('pedidos', absolute: false));


                        

    }

    public function show(string $id)
    {
       $pedidos = pedido::with('motoboy')->findOrFail($id);
       return view('remeterpedido',compact('pedidos'));
    }


    public function motoboyzona($zona)
    {
         // Busca os motoboys com base na zona
        $motoboys = motoboy::where('zona_servico', $zona)->get(['id', 'primeiro_nome', 'ultimo_nome']);
        return response()->json($motoboys);
    }

   


}
