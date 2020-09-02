<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use App\Models\ModelClient;

class ClientController extends Controller
{
    private $objClient;
    
    public function __construct()
    {
        $this->objClient = new ModelClient();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = $this->objClient->all()->sortByDesc('date');
        $client = $this->objClient->paginate(5);
        return view('index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $cad = $this->objClient->create([
            'name'=>$request->name,
            'date'=>$request->date,
            'salesman'=>$request->salesman,
            'description'=>$request->description,
            'price'=>$request->price            
        ]);
        if($cad){
            return redirect('clientes');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=$this->objClient->find($id);
        return view('show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=$this->objClient->findOrFail($id);
        return view('create', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $this->objClient->where(['id'=>$id])->update([
            'name'=>$request->name,
            'date'=>$request->date,
            'salesman'=>$request->salesman,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return redirect('clientes')->withSucesso('message','Cliente alterado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del=$this->objClient->destroy($id);
       return($del)?"sim":"não";
    }

    /**
     * Search Clients
     */
    public function search(Request $request)
    {
        $pesquisar = $request->except('_token');

        $clients = $this->objClient->search($request->pesquisar);

        return view('index', [
            'client' => $clients,
            'pesquisar' => $pesquisar
        ]);
    }
    
}
