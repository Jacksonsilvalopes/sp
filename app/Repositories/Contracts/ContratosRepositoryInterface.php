<?php

namespace App\Repositories\Contracts;


interface ContratosRepositoryInterface {
    
     public function all();
     public function paginate(int $paginate=8);
     public function findWhereLike(array $colunas_pesquisar, string $valor_pesquisa, string $coluna_ordenar ,string $ordem = 'ASC');
     
    
}