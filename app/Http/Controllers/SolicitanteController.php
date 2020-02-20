<?php

namespace App\Http\Controllers;

use App\Solicitante;
use App\Http\Requests\SolicitanteRequest;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $sol = new Solicitante();
//        $sol->email = "carlos@carlos.com";
//        $sol->nome = "Carlos teste";
//        $sol->telefone = "1234567";
//        $sol->save();
        
        return view('solicitante.lista')
                ->with('solicitantes', Solicitante::orderBy('nome')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('solicitante.form')
               ->with('solicitantes', new Solicitante());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitanteRequest $request)
    {
        $validos = $request->validated();
        
        $solicitante = new Solicitante();
        $solicitante->email = $validos['email'];
        $solicitante->nome = $validos['nome'];
        $solicitante->telefone = $validos['telefone'];
        $solicitante->observacao = $validos['observacao'];
        
        $solicitante->save();
        return redirect()->route('solicitante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitante $solicitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitante $solicitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitante  $solicitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitante $solicitante)
    {
        //
        $solicitante->delete();
        
        return redirect()->route('solicitante.index');
    }
}
