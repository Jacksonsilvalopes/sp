@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')

<div class="container" >
    <h3>Editar Curso</h3>
    <form class="needs-validation"  action="{{route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
               @include('admin.cursos._form')
        <button style="margin-left: 16px;" class="btn btn-primary ">Atualizar</button>

    </form>
</div>

@endsection
