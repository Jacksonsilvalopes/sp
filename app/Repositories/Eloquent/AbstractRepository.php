<?php

namespace App\Repositories\Eloquent;

abstract class AbstractRepository {
    
    protected $model;
            
    function __construct() {
        
          $this->model = $this->resolveModel(); 
        
    }
    //metodo que instancia a classe a ser utilizada
      protected function resolveModel(){
        return app($this->model); //retorna   $modelo = app(User::class) ou seja a instancia da classe User
    }
    
    //metodo para listar elementos todos elementos da tabela
     public function all(){
       
        return  $this->model->all();
    }
    
    //metodo para listar e paginar elementos todos elementos da tabela
     public function paginate(int $paginate=8){
       
        return  $this->model->paginate($paginate);
    }
    
     public function findWhereLike(array $colunas_pesquisar, string $valor_pesquisa, string $coluna_ordenar ,string $ordem = 'ASC')
    {
        $query = $this->model;
        
        foreach($colunas_pesquisar as $key => $value){
           
         $query = $query->orWhere($value,'like','%'.$valor_pesquisa.'%');
         
        }
        
        return $query->orderBy($coluna_ordenar,$ordem)->get();
    }
    
    
    
    
    
}