<?php

namespace App\Http\Controllers;

use App\Models\motoboy;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MotoboyRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('storemotoboy');
    }

    public function store(Request $request)
    {
        $motoboy = new Motoboy();
        $motoboy->primeiro_nome = $request->input('primeiro_nome');
        $motoboy->ultimo_nome = $request->input('ultimo_nome');
        $motoboy->telefone_principal = $request->input('telefone_principal');
        $motoboy->telefone_altenativo = $request->input('telefone_altenativo');
        $motoboy->matricula = $request->input('matricula');
        $motoboy->data_inicio = $request->input('data_inicio');
        $motoboy->zona_servico = $request->input('zona_servico');
        $motoboy->save();

        return redirect()->intended(route('motoboy', absolute: false));    
    }

    public function edit($id)
    {
        $motoboy = Motoboy::findOrFail($id);
        return view('editmotoboy',compact('motoboy'));

    }

    public function update(Request $request, string $id)
    {
        $motoboy = Motoboy::findOrFail($id);
        $motoboy->primeiro_nome = $request->input('primeiro_nome');
        $motoboy->ultimo_nome = $request->input('ultimo_nome');
        $motoboy->telefone_principal = $request->input('telefone_principal');
        $motoboy->telefone_altenativo = $request->input('telefone_altenativo');
        $motoboy->matricula = $request->input('matricula');
        $motoboy->data_inicio = $request->input('data_inicio');
        $motoboy->zona_servico = $request->input('zona_servico');
        $motoboy->save();

        return redirect()->route('motoboy');



    }

    public function destroy(string $id)
    {
        $motoboy = Motoboy::findOrFail($id);
        $motoboy->delete();
        return redirect()->route('motoboy');
    }

}
