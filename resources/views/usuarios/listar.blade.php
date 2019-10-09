@extends('shared.base')
@section('content')
    <div class="panel panel-default">    
        <div class="panel-heading" ">Usuários</div>         
        <a id="btnadic" class="btn btn-primary" href="{{ route('registrar') }}">{{ __('Adicionar Usuário') }}</a>
        <style type="text/css">
           #btnadic{
              margin: 10px;
              float: right;}
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
                                    <a href="{{route('editar', $usuario->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>                                         
                                </td>                                
                            </tr>                         
                        @endforeach                                 
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>
@endsection