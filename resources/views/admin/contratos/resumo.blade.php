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
             <th>RG</th>
            <th>FISCAL TECNICO</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($list as $lists)
        <tr>
            <td>{{ $lists->rg }}</td>     
            
            <td>
                @if($registro == 'fiscal tecnico')
                 @foreach($list as $lists)
                
                 {{ $lists->rg }}
                
                  @endforeach
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@listagem(['pesquisa'=>$pesquisa,'list'=>$list ])
@endlistagem
@endpagina
@endsection

