<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;


class ContactoController extends Controller
{
    public function getIndex()
    {
        return view('contacto');
    }

    public function getShow($id)
    {
        return 'Has elegido el servicio '.$id;
    }

    public function getCreate()
    {
        return view('servicioscreate');
    }

    public function getEdit($id)
    {
        return 'Vas a editar el contacto '.$id;
    }

    public function store(Request $request){
        $registronuevo = New Contacto();
        $registronuevo -> nombre = $request -> input('nombre');
        $registronuevo -> apellidos = $request -> input('apellidos');
        $registronuevo -> telefono = $request -> input('numerotelefono');
        $registronuevo -> email = $request -> input('correo');
        $registronuevo -> consulta = $request -> input('consulta');
        $registronuevo -> save();
        return redirect('/');
       return $request->all();
    }
}