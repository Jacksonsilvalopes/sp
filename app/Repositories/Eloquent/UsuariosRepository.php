<?php

namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UsuariosRepositoryInterface;
use App\User;

class UsuariosRepository extends AbstractRepository implements UsuariosRepositoryInterface {
    
    protected $model = User::class;
    
  

    
    
   
}