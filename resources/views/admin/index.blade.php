@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row center">
      <h4>Admin</h4>
    </div>

    @include('admin._caminho')

    <div class="row">
    
        <div class="col s12 m6">
          <div class="card purple darken-2">
            <div class="card-content white-text">
              <span class="card-title">Contrato</span>
              <p>Inclusão/ Atualização/ Exclusão de Contratos no Sistema</p>
            </div>
            <div class="card-action">
              <a href="">Visualizar</a>
            </div>
          </div>
        </div>
        
        <div class="col s12 m6">
          <div class="card green">
            <div class="card-content white-text">
              <span class="card-title">Entidades</span>
              <p>Inclusão/ Atualização/ Exclusão de Contratadas</p>
            </div>
            <div class="card-action">
              <a href="#">Visualizar</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card blue ">
            <div class="card-content white-text">
              <span class="card-title">Usuários</span>
              <p>Usuários Envolvidos Na Gestão de Contratos</p>
            </div>
            <div class="card-action">
              <a href="{{route('usuarios.index')}}">Visualizar</a>
            </div>
          </div>
        </div>
         
        <div class="col s12 m6">
          <div class="card orange darken-4">
            <div class="card-content white-text">
              <span class="card-title">Papéis</span>
              <p>Listar papéis do sistema</p>
            </div>
            <div class="card-action">
              <a href="">Visualizar</a>
            </div>
          </div>
        </div>
       
      </div>


</div>
@endsection
