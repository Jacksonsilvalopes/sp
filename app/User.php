<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'lotacao', 'telefone', 'matricula', 'entidade', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function meusContratos()
    {
        // metodo utilizado para tabela muito para muito ->belongsToMany
        // inicio o metodo na classe que ira determinar o id , metodo find.
        //1 paramentro->os dados que quero
        //2 parametro -> o nome da tabela que compoe os dois ids que motivaram a tabela muito para muito
        //3 o id de onde estou na classe
        //4 id da tabela que desejo ter os dados
        // Não é magica....é tecnologia
        
        return $this->belongsToMany('App\Contrato','responsaveis','id_user','id_contrato' );
        
        
    }
}
