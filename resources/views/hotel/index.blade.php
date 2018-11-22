@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Completo</th>
      <th>Categoria</th>
    </tr>

    @foreach($hoteles as $hotel)
      <tr>
        <td>{{$hotel->id}}</td>
        <td>{{$hotel->nombre}}</td>
        <td>{{$hotel->direccion}}</td>
        @if($hotel->completo == 1)
          <td><span color="red">Completo</span></td>
        else
          <td>No completo</td>
        @endif
        <td>{{$hotel->categoria}}</td>
      </tr>
    @endforeach

  </table>

@endsection
