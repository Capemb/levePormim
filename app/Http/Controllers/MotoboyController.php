<?php

namespace App\Http\Controllers;

use App\Models\motoboy;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MotoboyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $motoboys = motoboy::when($request->has('search'), function($query) use($request){
            $query->where('primeiro_nome','%LIKE',"%$request->search%")
                ->orWhare('ultimo_nome','%LIKE',"%$request->search%");
        } )->OrderBy('id',$request->has('order') && $request->order == 'asc' ? 'ASC':'DESC')->get();

        return view('showmotoboy', compact('motoboys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(motoboy $motoboy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, motoboy $motoboy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(motoboy $motoboy)
    {
        //
    }
}
