<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         return [
        'primeiro_nome' => 'required|string|max:255',
        'ultimo_nome' => 'required|string|max:255',
        'numero_remetente' => 'required|string|max:20',
        'numero_receptor' => 'required|string|max:20',
        'artigo_recolha' => 'required|string|max:255',
        'data_recolha' => 'required|date',
        'hora_recolha' => 'required',
        'municipio_recolha' => 'required|string|max:255',
        'distrito_recolha' => 'required|string|max:255',
        'motoboy_id' => 'required|exists:motoboys,id',
        'primeiro_nome_receptor' => 'required|string|max:255',
        'ultimo_nome_receptor' => 'required|string|max:255',
        'numero_receptor_principal' => 'required|string|max:20',
        'numero_receptor_altenativo' => 'required|string|max:20',
        'municipio_entrega' => 'required|string|max:255',
        'distrito_entrega' => 'required|string|max:255',
        'descricao' => 'nullable|string'
    ];
    }
}
