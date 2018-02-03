<?php

namespace App\Http\Controllers;
use App\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {

        
        $eventos = Evento::all();

        //return dd($eventos);
        return view('home.evento.index',compact('eventos'));

        //return view('home.evento.index',['eventos' => Evento::all()]);
    }

    public function create()
    {
        return view('home.evento.create');  

    }

    public function store(Request $request)
    {
        request()->validate([
            'nome' => 'required',
            'user_id'=>'required',
            'descricao' => 'required',
            'qtdePessoas' => 'required',
            'dataInicio' => 'required',
            'horaInicio' => 'required',
            'dataFim' => 'required',
            'horaFim' => 'required'
        ]);

        Evento::create($request->all());

        return redirect()->route('evento.index')
            ->with('success','Evento Criado com Sucesso!');
    }

    public function show(Evento $evento)
    {
        
        return view('home.evento.show',['evento' => Evento::findOrFail($evento->id)]);
    
    }

    public function edit(Evento $evento)
    {
        return view('home.evento.edit',['evento' => Evento::findOrFail($evento->id)]);
    }

    public function update(Request $request,Evento $id)
    {
        request()->validate([
            'nome' => 'required',
            'user_id'=>'required',
            'descricao' => 'required',
            'qtdePessoas' => 'required',
            'dataInicio' => 'required',
            'horaInicio' => 'required',
            'dataFim' => 'required',
            'horaFim' => 'required'
        ]);

        Evento::update($request->all());

        return redirect()->route('evento.show',$id)
            ->with('success','Evento Alterado com Sucesso!');
    }

    public function destroy(Evento $evento)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        Session::flash('success','Evento Excluido com Sucesso!');
        return redirect()->route('evento');
    }
}
