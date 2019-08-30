<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
   // protected $connection = 'gc22';
    protected $table = 'contrato';
    protected $primaryKey = 'id_contrato';
    
    
    public function responsaveis()
    {
        // vai retornar muitos responsaveis -> has Many (um para muitos)
        // a classe onde esta o que desejo
        //o id que utilizara o metodo find
        
        return $this->hasMany('App\Responsavel','id_contrato' );
    }
    
    
}
