@extends('layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            <th>RG</th>
            <th>STATUS</th>
            <th>TECNICO ADMINISTRATIVO</th>
            <th>FISCAL TECNICO</th>
            <th>VALOR DO CONTRATO</th>
           
        </tr>
    </thead>
    <tbody>
       @foreach($list as  $lists)
        <tr>						
            <td>{{$lists->rg}}</td>
            <td>{{$lists->status}}</td>
            <td>
               @foreach($listsecd as $listsec)  
                @if($listsec->responsabilidade == 3)
                
                {{$listsec->nome}}
                
                @endif
                
                @endforeach 
            </td>
            <td>
               @foreach($listsecd as $listsec)  
                @if($listsec->responsabilidade == 4)
                
               {{ $listsec->nome}}
                
                @endif
                
                @endforeach         
                
            </td>
            <td>{{ $lists->valor_atual}}</td>
           
        </tr>
         @endforeach 
    </tbody>
</table>
@endsection
