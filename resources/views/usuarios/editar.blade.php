@extends('shared.base')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">Atualizar usuário</div>
<div class="panel-body">
<form class="form-horizontal" method="post" action="{{route ('atualizar', $usuario->id)}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Digite seu nome" value="{{$usuario->name}}">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Digite seu email" value="{{$usuario->email}}">
    </div>
  </div>
    <div class="form-group">
    <label for="cargo" class="col-sm-2 control-label">Cargo</label>
    <div class="col-sm-10">
      <select class="form-control" name="cargo" value="{{$usuario->cargo}}">
        <option {{($usuario->cargo == 'Gerente'  ? 'selected' : '')}}>Atendente</option>
        <option {{($usuario->cargo == 'Coordenador'  ? 'selected' : '')}}>Coordenador</option>
        <option {{($usuario->cargo == 'Consultor'  ? 'selected' : '')}}>Consultor</option>
        <option {{($usuario->cargo == 'Supervisor'  ? 'selected' : '')}}>Supervisor</option>
      </select>
    </div>
  </div>
  <hr>
  
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Digite sua nova senha ou deixe em branco para manter a antiga">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
  </div>
</form>
</div>
</div>
@endsection