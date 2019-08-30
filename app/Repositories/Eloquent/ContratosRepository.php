<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\ContratosRepositoryInterface;
use App\Contrato;
use Illuminate\Support\Facades\DB;

class ContratosRepository extends AbstractRepository  implements ContratosRepositoryInterface {

    protected $model = Contrato::class;

    function __construct() {

        $this->model = $this->resolveModel();
    }

    //metodo que instancia a classe a ser utilizada
    protected function resolveModel() {
        return app($this->model); //retorna   $modelo = app(User::class) ou seja a instancia da classe User
    }

    //metodo para listar elementos todos elementos da tabela
    public function all() {

        return $this->model->all();
    }

    //metodo para listar e paginar elementos todos elementos da tabela
    public function paginate(int $paginate = 8) {

        return $this->model->paginate($paginate);
    }

    public function findWhereLike(array $colunas_pesquisar, string $valor_pesquisa, string $coluna_ordenar, string $ordem = 'ASC') {
        $query = $this->model;

        foreach ($colunas_pesquisar as $key => $value) {

            $query = $query->orWhere($value, 'like', '%' . $valor_pesquisa . '%');
        }

        return $query->orderBy($coluna_ordenar, $ordem)->get();
    }

    public function resumoContrato( ) {

        /*  $registro = DB::table('contratos')
          ->join('severidades', 'severidades.id_contrato', '=', 'contratos.id_contrato')
          ->select('contratos.*','severidades.*')//seleção doque desejo
          ->where('contratos.id_contrato', $id)
          ->get(); */
        
        
         $registro = DB::table('contratos')
          ->join('local', 'local.id_contrato', '=', 'contratos.id_contrato')
          ->join('responsaveis', 'responsaveis.id_contrato', '=', 'contratos.id_contrato')
          ->select('contratos.*','local.sigla','responsaveis.responsabilidade' )        
          ->get(); 

        return $registro;
    }

    public function findRelation($tabela, $nome, $id) {

      return $relation = DB::table($tabela)->where($nome, $id)->get();
    }

//minha função generica 
    
  //Esta função  recebe um objeto com varios atributos e a coluna que desejo extrair
  //no primeiro  foreach extraio o valores do array
  //no segundo foreach extraio somente as colunas que desejo
    public function extractValues($key, $columns) {
        foreach ($key as $value) {

            foreach ($columns as $colum) {
                $registro[] = $value->$colum;
            }
        }
        return $registro;
    }
}
