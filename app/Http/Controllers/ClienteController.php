<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    private $totalPage = 5;

    public function index() {

        $clientes = Cliente::all()->sortByDesc('date');
        $clientes = cliente::paginate($this->totalPage);
        $total = Cliente::all()->count();
        
        return view('list-clientes', compact('clientes', 'total'));
    }

    public function create(){
        return view('include-cliente');
    }

    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->name = $request->name;
        $cliente->date = $request->date;
        $cliente->vendedor = $request->vendedor;
        $cliente->descricao = $request->descricao;
        $cliente->price = $request->price;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message','Cliente cadastrado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('alter-cliente', compact('cliente'));
    }

    public function update(Request $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->name = $request->name;
        $cliente->Date = $request->date;
        $cliente->vendedor = $request->vendedor;
        $cliente->descricao = $request->descricao;
        $cliente->price = $request->price;
        $cliente->save();
        return redirect()->route('cliente.index')->with('message','Cliente alterado com sucesso!');
    }

    public function destroy($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('cliente.index')->with('message', 'Cliente excluído com suceso!');
    }
}
