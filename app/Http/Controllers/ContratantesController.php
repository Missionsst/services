<?php

namespace App\Http\Controllers;
use App\Contratante;
use App\Evento;

use Illuminate\Http\Request;

class ContratantesController extends Controller
{
    public function avaliar(Evento $evento)
    {
        //dd($evento);
        //$evento_id = $evento->id;
        $evento = Evento::findOrFail($evento->id);
        //dd($evento);
        return view('home.contratante.create',compact('evento'));
    }

    public function index()
    {
        $contratante= Contratante::all();
        $eventos = Evento::all();
        return view('home.contratante.index',compact('contratante','eventos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.contratante.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Contratante::create($request->all());

        return redirect()->route('evento.index')
            ->with('success','Contratante Avaliado com Sucesso!');
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
