<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        $total = Usuario::all()->count();
        return view('ver-usuarios', compact('usuarios', 'total'));
    }

    public function create(){
        return view('adicionar-usuario');
    }

    public function store(Request $request){
        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->CPF = $request->CPF;
        $usuario->senha = $request->senha;
        $usuario->save();
        return redirect()->route('usuario.index')->with('message', 'Usuário criado com sucesso');
    }

    public function show($id){

    }

    public function edit($id){
        $usuario = Usuario::findOrFail($id);
        return view('alterar-usuario', compact('usuario'));
    }

    public function update(Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->nome = $request->nome;
        $usuario->CPF = $request->CPF;
        $usuario->senha = $request->senha;
        $usuario->save();
        return redirect()->route('usuario.index')->with('message', 'Usuário alterado com sucesso');
    }

    public function destroy($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return redirect()->route('usuario.index')->with('message', 'Usuário excluído com sucesso');
    }
}
