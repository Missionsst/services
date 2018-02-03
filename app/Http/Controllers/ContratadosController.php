<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contratado;
use App\Evento;

class ContratadosController extends Controller
{
    public function avaliarContratado(Evento $evento,Contratado $contratado)
    {
        //dd($evento);
        //$evento_id = $evento->id;
        $evento = Evento::findOrFail($evento->id);
        $contratado = Contratado::findOrFail($contratado->id);
        //dd($evento);
        return view('home.contratado.avaliarContratado',compact('evento','contratado'));
    }

    public function inscrever(Evento $evento)
    {
        //dd($evento);
        //$evento_id = $evento->id;
        $evento = Evento::findOrFail($evento->id);
        //dd($evento);
        return view('home.contratado.create',compact('evento'));
    }

    public function index()
    {
        $contratados = Contratado::all();
        $eventos = Evento::all();
        return view('home.contratado.index',compact('contratados','eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {
        return view('home.contratado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        //dd($request);
        Contratado::create($request->all());

        return redirect()->route('evento.index')
            ->with('success','Inscrição Realizada com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
