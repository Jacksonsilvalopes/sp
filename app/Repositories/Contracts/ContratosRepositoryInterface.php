<?php

namespace App\Repositories\Contracts;


interface ContratosRepositoryInterface {
    
     public function all();
     public function paginate(int $paginate=8);
     
    
}