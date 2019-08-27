@extends('layouts.app')


@section('content')

@pagina(['col'=>$col, 'aviso'=>'success'])
@rastro(['routname'=>$routname,'caminhos'=>$caminhos ])
@endrastro
@formulario(['col'=>$col,'routname'=>$routname,'pesquisa'=>$pesquisa ])
@endformulario
<table>
    <thead>
        <tr>
            <th>NOME</th>
            <th>ALOCAÇÃO</th>
            <th>TELEFONE</th>
            <th>E-MAIL</th>


            <th>MATRICULA</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $lists)
        <tr>						
            <td>{{ $lists->name }}</td>
            <td>{{ $lists->lotacao }}</td>
            <td>{{ $lists->telefone }}</td>
            <td>{{ $lists->email }}</td>
            <td>{{ $lists->matricula }}</td>
            <td>
                <form action="#" method="post" >
                    <a title="Editar" class="btn-floating  waves-effect waves-light btn" href="#"><i class="material-icons">mode_edit</i></a>
                    <a title="Permissões" class="btn-floating  waves-effect waves-light btn" href="#"><i class="material-icons">lock_outline</i></a>
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button title="Deletar"  class="btn-floating btn red "><i class="material-icons ">delete</i></button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@listagem(['pesquisa'=>$pesquisa,'list'=>$list ])
@endlistagem
@endpagina
@endsection

