<?php

Route::view('/', "enunciado");

Route::get('/clientes',['as' => 'clientes', 'use' => 'ClientesController@getAll']);
Route::get('/hoteles',['as' => 'hoteles', 'use' => 'HotelesController@primeraCategoria']);
Route::view('formNuevoCliente','cliente.create');
Route::post('nuevoCliente',['as' => 'nuevoCliente', 'use' => 'ClientesController@add']);
Route::get('reserva/{id}',['as' => 'reserva', 'use' =>'ReservaController@get']);