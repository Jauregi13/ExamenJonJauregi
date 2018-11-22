@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

  <h3>Escribe tu nombre: Jon Jauregi</h3>
  Has conseguido poner en marcha la aplicación web!! <br><br>Anota aquí mismo cómo has resuelto el ejercicio 2 del examen.

  <p>He editado el fichero .env en el cual he cambiado la configuración de la conexión a la base de datos MySQL. Donde aparece DB_DATABASE tenemos que poner la base de datos 'agencia', y despues habría que poner el usuario con el que se va a conectar al servidor de MySQL y la contraseña tambien. La configuración quedaría asi:

  	<b>DB_CONNECTION=mysql<br>
	   DB_HOST=127.0.0.1<br>
	   DB_PORT=3306<br>
	   DB_DATABASE=agencia<br>
	   DB_USERNAME=root<br>
	   DB_PASSWORD=root
	</b>
  </p>
@endsection
