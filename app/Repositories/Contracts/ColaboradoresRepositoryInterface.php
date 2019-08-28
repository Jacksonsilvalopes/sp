<?php

namespace App\Repositories\Contracts;


interface ColaboradoresRepositoryInterface {
    
    public function all();
    public function paginate(int $paginate=8);
    public function findWhereLike(array $colunas_pesquisar, string $valor_pesquisa, string $coluna_ordenar ,string $ordem = 'ASC');
    
     
    
}