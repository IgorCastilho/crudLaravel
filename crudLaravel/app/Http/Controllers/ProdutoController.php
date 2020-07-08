<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        $total = Produto::all()->count();
        return view('ver-produtos', compact('produtos', 'total'));
    }

    public function create(){
        return view('adicionar-produto');
    }

    public function store(Request $request){
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto criado com sucesso');
    }

    public function show($id){

    }

    public function edit($id){
        $produto = Produto::findOrFail($id);
        return view('alterar-produto', compact('produto'));
    }

    public function update(Request $request, $id){
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->quantidade = $request->quantidade;
        $produto->preco = $request->preco;
        
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto alterado com sucesso');
    }

    public function destroy($id){
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->route('produto.index')->with('message', 'Produto excluído com sucesso');
    }

}
