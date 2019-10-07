@extends('shared.base')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading" ">Usuários</div> <button id="btnadicionausr" href="{{ route('register') }}" type="button" class="btn btn-primary">Adicionar Usuários</button>
        <style type="text/css">
           #btnadicionausr{
              margin: 10px;}
        </style>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            {{-- <th>Login</th> --}}
                            <th>Cargo</th>
                            <th>Criado</th>
                            <th>Ultimo login</th>
                            <th>Opções</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                {{-- <td>{{$usuario->login}}</td> --}}
                                <td>{{$usuario->cargo}}</td>
                                <td>{{$usuario->created_at}}</td>
                                <td>{{$usuario->updated_at}}</td>
                                <td>
                                    <a href="" class="btn btn-sm waves-effect btn-primary" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="fa fa-edit">e</i>
                                    </a>
                                    <a href="" class="btn btn-sm waves-effect btn-danger" data-toggle="tooltip" data-placement="top" title="Editar">
                                        <i class="fa fa-edit">x</i>
                                    </a>                                    
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>
@endsection