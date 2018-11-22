<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

class ClientesController extends Controller
{
    public function getAll()
    {
    	$clientes = Cliente::all();
    	return view('cliente.index', ['clientes' => $clientes]);
    }

    public function add(Request $request)
    {
    	$cliente = new Cliente;

    	$cliente->nif= $request->nif;
    	$cliente->nombre = $request->nombre;
    	$cliente->apellido = $request->apellido;
    	$cliente->telefono = $request->telefono;

    	$cliente->save();

    	return view('cliente.create');

    }
}
