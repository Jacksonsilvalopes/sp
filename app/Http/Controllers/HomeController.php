<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrato;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $list=Contrato::all();
   
        dd($list);
     
    $contrato = App\Contrato::find(217);
    dd($contrato->responsaveis);
        
        
    // $listsecd;
        
         return view('home',compact('list','listsecd')); 
       
    }
}
