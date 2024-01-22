<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;
class PessoaController extends Controller
{
    protected $model;
    public function __construct(Pessoa $pessoa){
        $this->model = $pessoa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response($this->model->all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $this->model->create($request->all());
            return response('Criado com sucesso');
            } catch(\Throwable $th) {
                throw $th;
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pessoa = $this->model->find($id);
        if(!$pessoa){
            return response('Pessoa não encontrada',404);
        }
        return response($pessoa,200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pessoa = $this->model->find($id);
        if(!$pessoa){
            return response('Pessoa não encontrada',404);
        }
        try{
            $dados = $request->all();

            // Atualiza os campos da pessoa
            $pessoa->fill($dados);
    
            // Salva as alterações no banco de dados
            $pessoa->save();
            return response('Cliente Atualizado',200);
        }catch(\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pessoa = $this->model->find($id);
        if(!$pessoa){
            return response('Pessoa não encontrada',404);
        }
        try{
            $pessoa->delete();
            return response('Pessoa Excluida',200);
        }catch(\Throwable $th) {
            throw $th;
        };
    }
}
