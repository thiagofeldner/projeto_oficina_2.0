@extends('templates.template')

@section('content')
<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <br>
                <h1 id="text-center"><b>@if(isset($client))Editar @else Cadastrar Cliente @endif</b></h1><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Panel</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li class="active">@if(isset($client))Editar @else Cadastro @endif</li>
                </ol>
            </div>
        </div>
        @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
            {{$erro}}<br>
            @endforeach
        </div>
        @endif

        @if(isset($client))
        <form name="formEdit" id="formEdit" method="post" action="{{url("clientes/$client->id")}}">
            @method('PUT')
            @else
            <form name="formCad" id="formCad" method="post" action="{{url("clientes")}}">
                @endif
                <div class="row">
                    @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input class="form-control" 
                                    type="text" name="name" 
                                    placeholder="Nome" 
                                    value="{{$client->name ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="date">Data</label>
                            <input class="form-control" 
                                    type="datetime-local" 
                                    name="date" 
                                    placeholder="Data" 
                                    value="{{$client->date ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Descrição</label>
                            <input class="form-control" 
                                    type="text" 
                                    name="description" 
                                    placeholder="Descrição" 
                                    value="{{$client->description ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="salesman">Vendedor</label>
                            <input class="form-control" 
                                    type="text" 
                                    name="salesman" 
                                    placeholder="Vendedor" 
                                    value="{{$client->salesman ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Preço</label>
                            <input class="form-control" 
                                    type="text" name="price" 
                                    placeholder="Preço" 
                                    value="{{$client->price ?? ''}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="reset" class="btn btn-danger" value="Limpar">
                        <input class="btn btn-primary" type="submit" 
                            value="@if(isset($client))Editar @else Cadastrar @endif">
                    </div>
            </form>
    </div>
</div>
</div>
@endsection