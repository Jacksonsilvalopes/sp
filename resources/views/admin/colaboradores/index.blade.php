@extends('layouts.app')

@section('content')

            @pagina(['col'=>12, 'aviso'=>'success'])
        

            @rastro(['routname'=>$routname ])
            @endrastro

            @formulario(['col'=>$col,'routname'=>$routname,'pesquisa'=>$pesquisa ])
            @endformulario
            
            
            @tabela(['columnList'=>$columnList,'list'=>$list ])
            @endtabela
            
            @listagem(['pesquisa'=>$pesquisa,'list'=>$list ])
            @endlistagem
            
            @endpagina

          
  
@endsection

