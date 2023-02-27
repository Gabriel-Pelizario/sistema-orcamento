<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Endereco;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lista de clientes
        $clientes = Cliente::all();

        return view('Lista.cliente', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view cadastro de cliente
        return view('Cadastro.cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //salvar o cliente no banco
    public function store(Request $request)
    {


        $cliente = Cliente::create($request->all());
        $cliente->endereco()->create($request->all());


        dd('$cliente');
        

        return redirect('/lista/clientes')->with('msg', 'Cliente cadastrado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //view editar o cliente
        $cliente = Cliente::with(['endereco'])->find($id);

        return view('Cadastro.editarCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $cliente = Cliente::find($id);

        $cliente->update($request->all());
        // update do relacionamento endereço
        $cliente->endereco->update($request->all());


        return redirect('/lista/clientes')->with('msg', 'Cliente editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //deletar o cliente no banco
        Cliente::findOrFail($id)->delete();

        return redirect('/lista/clientes')->with('msg', 'ok');
    }

    // informação do cadastro do cliente
    public function info($id)
    {

        $cliente = Cliente::find($id);

        $userOwner = User::where('id', $cliente->user_id)->first()->toArray();

        return view('Lista.cliente-info', compact('cliente', 'userOwner'));
    }
}
