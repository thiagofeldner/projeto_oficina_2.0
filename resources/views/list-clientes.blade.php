<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SGO 2.0</title>
        
        <!-- Favicon -->
        <link href="{{URL::asset('img/favicon.ico')}}" rel="shortcut icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" /> 
        <link href="{{URL::asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" /> 

        <!-- JavaScript -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="{{URL::asset('js/ajax.js')}}"></script>
        <script src="{{URL::asset('js/lightbox.js')}}"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('https://codificar.com.br/')}}" target="_blank"
                   title="Página Inicial" style="margin-top: 30px">
                    <img src="{{URL::asset('img/codificar.jpeg')}}" style="margin-top: -30px"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                        <a href="{{route('cliente.index')}}" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Panel</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                                                                       
                            <li><a href="{{route('cliente.index')}}">Clientes</a></li>  
                            <li><a href="{{route('cliente.index')}}">Vendedor</a></li> 
                            <li><a href="{{route('cliente.index')}}">Peças</a></li>                                            
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li><a href="{{url('/')}}" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a></li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav> 
        @if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" 
               data-dismiss="alert"
               aria-label="close">&times;</a>
            {{ session('message') }}
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
                        <ol class="breadcrumb">
                            <li><a href="{{route('cliente.index')}}">Panel</a></li>                  
                            <li class="active">Clientes</li>
                        </ol>
                        <br>
                        <a href="{{route('cliente.create')}}" 
                           class="btn btn-default btn-sm pull-right">
                            <span class="glyphicon glyphicon-plus"></span>Adicionar
                        </a>
                        <div id="pesquisa" class="pull-right">
                            <form class="form-group" method="POST" 
                                  action="#">                                   
                                <input type="text" name="pesquisar" 
                                       class="form-control input-sm pull-left" 
                                       placeholder="Pesquisar por nome..." required> 
                                <button class="btn btn-default btn-sm pull-right" 
                                        id="color"> 
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
                                        <th id="center">Código</th>
                                        <th>Nome</th>
                                        <th id="center">Data</th>  
                                        <th>Descrição</th>
                                        <th id="center">Vendedor</th>
                                        <th>Preço</th>                             
                                        <th id="center">Ações</th>                
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                    <tr>
                                        <td id="center">{{$cliente->id}}</td>
                                        <td title="Nome">{{$cliente->name}}</td>
                                        <td title="Data" id="center">{{$cliente->date}}</td>
                                        <td title="Descrição">{{$cliente->descricao}}</td>
                                        <td title="Quantidade" id="center">{{$cliente->vendedor}}</td>
                                        <td title="Preço">R$ {{number_format($cliente->price, 2,',','.')}}</td> 
                                        <td id="center">
                                            <a href="{{route('cliente.edit', $cliente->id)}}" 
                                               data-toggle="tooltip" 
                                               data-placement="top"
                                               title="Alterar"><i class="fa fa-pencil"></i></a>
                                            &nbsp;<form style="display: inline-block;" method="POST" 
                                                        action="{{route('cliente.destroy', $cliente->id)}}"                                                        
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Excluir" 
                                                        onsubmit="return confirm('Confirma exclusão?')">
                                                {{method_field('DELETE')}}{{ csrf_field() }}                                                
                                                <button type="submit" style="background-color: #fff">
                                                    <a><i class="fa fa-trash-o"></i></a>                                                    
                                                </button></form>
                                        </td>               
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $clientes->links() !!}
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Footer Section -->
        <div id="footer">
            <p>Developed By Thiago Feldner © <?= date('Y'); ?></p>
        </div>        
    </body>
</html>

