<?php

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('contratante', 'ContratantesController', [ 'except' => ['delete'] ] )->middleware('auth');
Route::get('avaliar/{evento?}', 'ContratantesController@avaliar')->name('avaliar');


Route::resource('contratado', 'ContratadosController', [ 'except' => ['delete'] ] )->middleware('auth');
Route::get('avaliarContratado/{evento?}/{contratado?}', 'ContratadosController@avaliarContratado')->name('avaliarContratado');

// Contratante inscrever e dar nota (usada para passar evento)
Route::get('inscrever/{evento?}', 'ContratadosController@inscrever')->name('inscrever');


//Route::resource('curriculum', 'CurriculunsController', [ 'except' => ['delete'] ] )->middleware('auth');
Route::resource('evento', 'EventosController', [ 'except' => ['delete'] ] )->middleware('auth');
//Route::resource('permissao', 'PermissoesController', [ 'except' => ['delete'] ] )->middleware('auth');
//Route::resource('ranking', 'RankingController', [ 'except' => ['delete'] ] )->middleware('auth');
Route::resource('usuario', 'UsuariosController', [ 'except' => ['delete'] ] )->middleware('auth');

