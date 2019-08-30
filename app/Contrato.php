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
    
    //minha função generica 
    
  //Esta função  recebe um objeto com varios atributos e a coluna que desejo extrair
  //no primeiro  foreach extraio o valores do array
  //no segundo foreach extraio somente as colunas que desejo
    public static function extractValues($key, $columns) {
        foreach ($key as $value) {

            foreach ($columns as $colum) {
                $registro[] = $value->$colum;
            }
        }
        return $registro;
    }
    
    public static function extractValuesResponse($key) {
        foreach ($key as $value) {

          $cont=Contrato::find($value);
          $registro[]= $cont->responsaveis;  
        }
        return $registro;
    }
}
