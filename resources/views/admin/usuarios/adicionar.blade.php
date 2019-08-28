@extends('layouts.app')
@section('content')

@pagina(['col'=>$col, 'aviso'=>'success'])

@rastro(['caminhos'=>$caminhos ])
@endrastro

    <form class="needs-validation"  action="" method="post" >
        {{csrf_field()}}
        @include('admin.usuarios._form')
        <button    class="waves-effect waves-light btn left ">Salvar</button>
      
    </form>
    
@endpagina

@endsection
