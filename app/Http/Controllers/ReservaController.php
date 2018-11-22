<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
class ReservaController extends Controller
{
    public function get($id)
    {
    	$cliente = Cliente::find($id);

    	return view('reserva.list',['cliente' => $cliente]);
    }
}
