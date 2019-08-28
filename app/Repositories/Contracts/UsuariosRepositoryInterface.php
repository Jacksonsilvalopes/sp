<?php

namespace App\Repositories\Contracts;


interface UsuariosRepositoryInterface {
    
    public function all();
     public function paginate(int $paginate=8);
     
    
}