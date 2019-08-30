<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ContratosRepositoryInterface;

class ContratosController extends Controller {

    private $routname = 'contratos';

    public function __construct(ContratosRepositoryInterface $model) {

        $this->model = $model;
    }

    public function index(Request $request) {
        $caminhos = [
                ['url' => '/admin', 'titulo' => 'Admin'],
                ['url' => '', 'titulo' => 'Contratos'],
        ];


        $columnList = ['rg' => 'RG', 'n_siscor' => 'SISCOR INICIAL', 'valor_atual' => 'VALOR ATUAL'];

        $pesquisa = "";


        if (isset($request->pesquisa)) {

            $pesquisa = $request->pesquisa;

            $list = $this->model->findWhereLike(['rg', 'n_siscor'], $pesquisa, 'rg', 'DESC');
        } else {
            $list = $this->model->Paginate(7);
        }

        $routname = $this->routname;
        $col = 12;
        $fluid = "";

        return view('admin.contratos.index', compact('list', 'pesquisa', 'routname', 'col','fluid', 'columnList', 'caminhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resumo($id) {
        echo 'oi';
    }

    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $contratos = $this->model->all();
      

        $columns1 = ['rg' => 'rg'];
        $registro10 = $this->model->extractValues($contratos, $columns1);
        dd($registro10);
        //tras dados do contrato (metodo find) 
        $contrato = $this->model->findRelation('contrato', 'id_contrato', $id);

        //   dd($contrato);
        //tras tabela severidade atraves do id do contrato (relação 1 para muitos)
        $list = $this->model->findRelation('severidades', 'id_contrato', $id);

        $columns = ['id_prestador' => 'id_prestador', 'rg' => 'rg'];
        $registro = $this->model->extractValues($contrato, $columns);


        $id_prestador = $registro[0];
        $rg = $registro[1];
        $fornecedor = $this->model->findRelation('prestador', 'id_prestador', $id_prestador);


        $columns = ['nome' => 'nome', 'cnpj' => 'cnpj'];
        $registro1 = $this->model->extractValues($fornecedor, $columns);
        // dd($registro1);
        $nomeFornecedor = $registro1[0];

        $columnList = ['id_severidade' => 'Id', 'prazo_atend' => 'Atendimento', 'prazo_solu' => 'Solução', 'descricao' => 'Descrição', 'multa' => 'Multa', 'item' => 'Item'];
        return view('admin.contratos.index', compact('contrato', 'list', 'fornecedor', 'columnList', 'id', 'rg', 'nomeFornecedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
