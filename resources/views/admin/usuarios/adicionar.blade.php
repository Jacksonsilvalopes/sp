@extends('layouts.app')
@section('content')

<div class="container" >
    <h3>Adicionar Usuarios</h3>
    <form class="needs-validation"  action="" method="post" >
        {{csrf_field()}}
        @include('admin.usuarios._form')
        <button style="margin-left: 16px;" class="btn btn-primary ">Salvar</button>

    </form>
</div>

@endsection
