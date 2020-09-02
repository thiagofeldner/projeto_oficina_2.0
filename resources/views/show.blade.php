@extends('templates.template')

@section('content')

<div id="line-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="center">
                <h3><b>Visualizar</b></h3>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Panel</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li class="active">Visualizar</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Nome: {{$client->name}}<br>
                Data: {{$client->date}}<br>
                Descrição: {{$client->description}}<br>
                Vendedor: {{$client->salesman}}<br>
                Preço: R$ {{number_format($client->price, 2,',','.')}}<br>
            </div>
        </div>
        <div class="text-center mt-5 mb-4">
            <a href="{{url("clientes")}}">
                <button class="btn btn-primary">Voltar</button>
            </a>
            <a href="#">
                <button class="btn btn-success">Imprimir</button>
            </a>
        </div>
    </div>
</div>

@endsection