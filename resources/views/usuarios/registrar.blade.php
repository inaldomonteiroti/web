@extends('shared.base')

@section('content')
<div class="panel panel-default">

<div class="panel-heading">Perfil do Sistema</div>
<div class="panel-body">
<form class="form-horizontal" method="post" action="{{route ('salvar')}}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Nome</label>
    <div class="col-md-6">
      <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-md-6">
      <input type="email" class="form-control" name="email" placeholder="Digite seu email">
    </div>
  </div>
  <div class="form-group">
    <label for="cargo" class="col-sm-2 control-label">Cargo</label>
    <div class="col-md-6">
      
      <select class="form-control" name="cargo">
        <option value="Gerente">Gerente</option>
        <option value="Coordenador">Coordenador</option>
        <option value="Consultor">Consultor</option>
        <option value="Supervisor">Supervisor</option>
      </select>
    </div>
  </div>
    
  <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Senha</label>
    <div class="col-md-6">
      <input type="password" class="form-control" name="password" placeholder="Digite sua nova senha ">
    </div>
  </div>
   
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
</form>
</div>
</div>
@endsection