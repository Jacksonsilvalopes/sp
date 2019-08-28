<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UsuariosRepositoryInterface;

class UsuariosController extends Controller {

    private $routname = 'usuarios';

    public function __construct(UsuariosRepositoryInterface $model) {

        $this->model = $model;
    }

    public function index(Request $request) {

        $caminhos = [
            ['url' => '/admin', 'titulo' => 'Admin'],
            ['url' => '', 'titulo' => 'Usuários'],
        ];


        $columnList = ['matricula' => 'Matricula', 'name' => 'Nome', 'lotacao' => 'Alocação', 'email' => 'Email', 'telefone' => 'Telefone'];

        $pesquisa = "";


        if (isset($request->pesquisa)) {

            $pesquisa = $request->pesquisa;
            $list = $this->model->findWhereLike(['name', 'email', 'lotacao', 'telefone'], $pesquisa, 'id', 'DESC');
        } else {
            $list = $this->model->Paginate(7);
        }

        $routname = $this->routname;
        $col = 12;

        return view('admin.usuarios.index', compact('list', 'pesquisa', 'routname', 'col', 'columnList', 'caminhos'));
    }

    public function create() {
        return view('admin.usuarios.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
