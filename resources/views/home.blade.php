@extends('layouts.app')

@section('content')
@pagina(['col'=>$col,'fluid'=> $fluid, 'aviso'=>'success'])
@rastro(['routname'=>$routname,'caminhos'=>$caminhos ])
@endrastro
<table class="highlight  striped responsive-table">
    <thead>
    
        <tr>
            <th>RG</th>
            <th scope="col">OBJETO DO CONTRATO</th>
            <th scope="col">MNEMONICO DA CONTRATADA</th>
            <th scope="col">GESTOR TECNICO</th>
            <th scope="col">DATA TERMINO </th>
            <th scope="col">PRAZO PARA TERMINO </th>
            <th scope="col">ALERTA DE ALTERAÇÕES NO KANBAN </th>
            <th scope="col">ALERTA DE ALTERAÇÕES NO KANBAN </th>
            <th scope="col">DATA TERMINO </th>
            <th scope="col">PRAZO PARA TERMINO </th>
            <th scope="col">SITUAÇÃO ATUAL </th>
            <th scope="col">SISCOR DE COBRANÇA</th>

        </tr>
    </thead>
    <tbody>
        @foreach($list as  $lists)
        @if($lists->tipo =='AQUISIÃ‡ÃƒO')
        <tr>						
            <td>{{$lists->rg}}</td>
            <td>{{$lists->objeto}}</td>
            <td>{{$lists->mine}}</td>
            <td>
                @foreach ($listsecd as $key => $value) 
                @foreach ($value as $key1 => $value1) 
                @if(  $value1->id_contrato == $lists->id_contrato )
                @if($value1->responsabilidade == 'Gestor Tecnico')                
                {{ $value1->nome}}        
                @endif
                @endif
                @endforeach
                @endforeach
            </td>
            <td></td>        
            <td>  </td>                
           
            <td>{{ $lists->n_siscor}}</td>

        </tr>
         @endif
        @endforeach 
    </tbody>
</table>

@endpagina
@endsection
