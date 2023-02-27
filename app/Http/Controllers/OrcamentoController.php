<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Orcamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view cadastro de orçamento
        // $cliente = Cliente::findOrFail($id);

        // return view('Cadastro.orcamento', compact('cliente'));
    }


    // view lista de orçamento
    public function listaOrcamento()
    {

        $clientes = Cliente::all();

        return view('Lista.orcamento', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  View cadastro de orçamento
    public function create()
    {

        $clientes = Cliente::all();

        return view('Cadastro.orcamento', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::beginTransaction();

        $orcamento = Orcamento::create($request->all());
        $orcamento->cliente()->create($request->all());

        // dd($orcamento);


        DB::commit();



        //salvar o orçamento no banco
        // $orcamento = new Orcamento();

        // relação orçamento e cliente
        // $orcamento->cliente_id = $request->cliente_id;

        // $orcamento->tp_orcamento = $request->tp_orcamento;
        // $orcamento->tp_pagamento = $request->tp_pagamento;
        // $orcamento->qtde_parcela = $request->qtde_parcela;
        // $orcamento->valor = $request->valor;
        // $orcamento->validade = $request->validade;
        // $orcamento->obs_pagamento = $request->obs_pagamento;
        // $orcamento->historico = $request->historico;
        // $orcamento->orcamento = $request->orcamento;

        // $orcamento->save();

        return redirect('/lista/orcamento')->with('msg', 'Orçamento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orcamento  $orcamento
     * @return \Illuminate\Http\Response
     */
    public function show(Orcamento $orcamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orcamento  $orcamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Orcamento $orcamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orcamento  $orcamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orcamento $orcamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orcamento  $orcamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orcamento $orcamento)
    {
        //
    }
}
