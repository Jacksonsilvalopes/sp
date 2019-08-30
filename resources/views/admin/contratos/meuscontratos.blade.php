@extends('layouts.app')
@section('content')
@admin(['id'=>$id, 'rg'=>$rg]) 
@pagina(['col'=>12, 'aviso'=>'success'])
<div class="row col s12 ">
    
    <div class="card">

        <table class="striped"  >

            <thead  >
                <tr>
                    <th scope="col" colspan ="3" fonte-size align="center"  height= "30px" bgcolor= "#e8e8e8"   ><center><b><font color='#0080FF'>RG: </font></b></th>    
                </tr>      
                </thead>
                <tbody>
                    @foreach($contrato as $contratos)
                    <tr>
                        <td colspan ="3"><font color='#0080FF'> Objeto :{{$contratos->objeto}} </font></td>
                    </tr>

                    <tr>
                        <td><font color='#0080FF' > Status : </font>  <font color='#df7700'>{{$contratos->status}}</font></td>
                        <td><font color='#0080FF'> Tipo : </font></td>
                        <td><font color='#0080FF'> Fornecedor : </font> <font color='#df7700'><a class=" modal-trigger" href="#modal2">{{$nomeFornecedor}}</a></font></td>                                                                                
                    </tr>
                    <tr>
                        <td><font color='#0080FF'> Nº Projeto Básico : </font></td>
                        <td><font color='#0080FF'> Siscor Inicial: </font></td>
                        <td><font color='#0080FF'>  Data da Assinatura : </font></td>

                    </tr>
                    <tr>
                        <td><font color='#0080FF'>Nº Processo : </font></td>
                        <td><font color='#0080FF'> Valor Contratado:  </font></td>
                        <td><font color='#0080FF'> Valor Atual : </font><font color='#df7700'></font></td>
                    </tr>
                    <tr>
                        <td><font color='#0080FF'>Vigência Contratual: </font> Meses</td>
                        <td><font color='#0080FF'>Início Vig. Contratual: </font></td>
                        <td><font color='#0080FF'> Final Vig. Contratual: </font><font color='#df7700'></b></font></td>
                    </tr>
                    <tr>
                        <td><font color='#0080FF'>Prorrogação: </font><font color='#df7700'></font></td>
                        <td><font color='#0080FF'> Prorrogavel até : </font></td>
                        <td><font color='#0080FF'> Prorrogação Final Vig. Contratual: </font><font color='#df7700'></b></font></td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
    <div class="card">
        <div class="card-content">
            <p>DAS GARANTIAS</p>
        </div>

        <table class="striped"  >
            <thead  >
                <tr>
                    <th scope="col">TIPO</th>    
                    <th scope="col">INICIO</th>     
                    <th scope="col">FIM</th>  
                    <th scope="col">VALOR</th>  
                    <th scope="col">STATUS</th>  
                </tr>      
            </thead>
            <tbody>
                <tr>
                    <td  style=" background-color:#cbd3da"><font color='#0080FF'> Vigência Garantia : </font>Meses</td>
                    <td  style=" background-color:#cbd3da"><font color='#0080FF'>  Fim da Garantia : </font>"<font color='#df7700'><b></b></font></td>
                    <td  style=" background-color:#cbd3da"><font color='#0080FF'>  Contagem Prazo : </font><font color='#df7700'><b></b></font></td>
                    <td  style=" background-color:#cbd3da"><font color='#0080FF'>  Fim da Garantia : </font>"<font color='#df7700'><b></b></font></td>
                    <td  style=" background-color:#cbd3da"><font color='#0080FF'>  Contagem Prazo : </font><font color='#df7700'><b></b></font></td>
                </tr>
                <tr>
                    <td  style=" background-color:#e9ecef"><font color='#0080FF'>  Prazo Entrega G. Execução : </font></td>
                    <td  style=" background-color:#e9ecef"><font color='#0080FF'> Status Prazo:  </font><font color='#df7700'><b></b></font></td>
                    <td  style=" background-color:#e9ecef"><font color='#0080FF'>  Valor Entrega G. Execução: </font>R$ </td>
                    <td  style=" background-color:#e9ecef"><font color='#0080FF'> Status Prazo:  </font><font color='#df7700'><b></b></font></td>
                    <td  style=" background-color:#e9ecef"><font color='#0080FF'>  Valor Entrega G. Execução: </font>R$ </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- MODAL MEUS CONTRATOS -->
    <div id="modal2" class="modal">
        <div class="modal-content bordered" >
            <table class="highlight  striped responsive-table">
                <thead>
                    <tr>
                        <th scope="col">NOME</th>     
                        <th scope="col">CNPJ</th>     
                        <th scope="col">ENDEREÇO</th>     
                        <th scope="col">ESTADO</th>     
                        <th scope="col">CEP</th>     
                    </tr>
                </thead>
                <tbody>                          
                    @if(!empty($fornecedor ))
                    @foreach($fornecedor as $for)
                    <tr>
                        <td>{{$for->nome}}</td> 
                        <td>{{$for->cnpj}}</td> 
                        <td> {{$for->endereco}}</td>       
                        <td> {{$for->estado}}</td>
                        <td> {{$for->cep}}</td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <a  class="modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <p>SEVERIDADES DE ANS</p>
        </div>
        @tabela(['columnList'=>$columnList,'list'=>$list ])
        @endtabela
    </div>
</div>
@endpagina
@endadmin
@endsection

