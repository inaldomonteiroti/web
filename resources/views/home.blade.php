@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CRMenu
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('listar') }}">Usuário do Sistema</a>
                    {{-- <a class="dropdown-item" href="#">Vendas</a>
                    <a class="dropdown-item" href="#">Promoções</a> --}}
                  </div>        
                 </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Você está logado !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
