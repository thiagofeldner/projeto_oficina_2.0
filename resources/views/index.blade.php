@extends('templates.template')

@section('content')

@if(isset($errors) && count($errors)>0)
<div class="text-center mt-4 mb-4 p-2 alert-danger">
    @foreach($errors->all() as $erro)
    {{$erro}}<br>
    @endforeach
</div>
@endif
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h3><b>Sistema de Gerenciamento de OFicina 2.0</b></h3>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @csrf
                <ol class="breadcrumb">
                    <li><a href="#">Panel</a></li>
                    <li class="active">Clientes</li>
                </ol>
                <br>
                <a href="{{url('clientes/create')}}" class="btn btn-default btn-sm pull-right">
                    <span class="glyphicon glyphicon-plus"></span>Adicionar
                </a>
                <div id="pesquisa" class="pull-right">
                    <form class="form-group" method="POST" action="{{ route('clients.search') }}">
                        @csrf
                        <input type="text" name="pesquisar" value="{{ $pesquisar['pesquisar'] ?? ''}}"
                            class="form-control input-sm pull-left" placeholder="Pesquisar:">                        
                        <button type="submit" class="btn btn-default btn-sm pull-right" id="color">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th id="center">ID</th>
                                <th>Nome</th>
                                <th id="center">Data</th>
                                <th>Descrição</th>
                                <th id="center">Vendedor</th>
                                <th>Preço</th>
                                <th id="center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($client as $clients)
                            <tr>
                                <td id="id">{{$clients->id}}</td>
                                <td title="name">{{$clients->name}}</td>
                                <td title="date" id="center">{{$clients->date}}</td>
                                <td title="description">{{$clients->description}}</td>
                                <td title="salesman" id="center">{{$clients->salesman}}</td>
                                <td title="price">R$ {{number_format($clients->price, 2,',','.')}}</td>
                                <td id="center">
                                    <a href="{{url("clientes/$clients->id")}}" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Visualizar">
                                        <i class="fa fa-eye"></i></a>
                                    <a href="{{url("clientes/$clients->id/edit")}}" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Editar">
                                        <i class="fa fa-pencil"></i></a>           
                                    <a href="{{url("clientes/$clients->id")}}" 
                                        class="js-del" 
                                        data-toggle="tooltip" 
                                        data-placement="top" 
                                        title="Excluir">
                                        <button type="submit" style="background-color: #fff">
                                            <i class="fa fa-trash-o"></i></a>
                                    </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (isset($pesquisar))
                        {!! $client->appends($pesquisar)->links() !!}
                    @else
                    {!! $client->links() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection