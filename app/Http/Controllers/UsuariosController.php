<?php

namespace App\Http\Controllers;
use App\Usuario;
use App\User;
use App\Permissao;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();

        //return dd($usuarios);
        return view('home.usuario.index',compact('usuarios'));

        //return view('home.usuario.index',['usuarios' => Usuario::all()]);
    }

    public function create()
    {
        return view('home.usuario.create');  

    }

    public function store(Request $request)
    {
        request()->validate([
            
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuario.index')
            ->with('success','Usuario Criado com Sucesso!');
    }

    public function show(Usuario $usuario)
    {
    
        return view('home.usuario.show',['usuario' => Usuario::findOrFail($usuario->id)]);
    
    }

    public function edit(Usuario $usuario)
    {
        return view('home.usuario.edit',['usuario' => Usuario::findOrFail($usuario->id)]);
    }

    public function update(Request $request,Usuario $id)
    {
        request()->validate([
            
        ]);

        Usuario::update($request->all());

        return redirect()->route('usuario.show',$id)
            ->with('success','Usuario Alterado com Sucesso!');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        Session::flash('success','Usuario Excluido com Sucesso!');
        return redirect()->route('usuario');
    }

}
