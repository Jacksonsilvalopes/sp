<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
         $caminhos = [
            ['url' => '/', 'titulo' => 'Home'],
           
        ];


        $list = Contrato::all();



        $columns = ['id_contrato' => 'id_contrato'];
        $id_contratos = Contrato::extractValues($list, $columns);

      

        $listsecd = Contrato::extractValuesResponse($id_contratos);
        
       

        /* foreach ($listsecd as $key => $value) {
          foreach ($value as $key1 => $value1) {
          echo $value1->responsabilidade;
          }

          }
         */
       $routname = 'home';
        $col = 12;
        $fluid = "";

        return view('home', compact('list', 'listsecd','routname', 'col', 'fluid', 'caminhos'));
    }

}
