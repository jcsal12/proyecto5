<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;


class ContactoController extends Controller
{
    public function getIndex()
    {
        $contactos = Contacto::all();
        return view('index', ['contactos' => $contactos]);
    }

    public function getShow($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('servicioscreate', ['contacto' => $contacto]);

    }

    public function getContacto()
    {
        return view('contacto');
    }

    public function getCreate()
    {
        return view('servicioscreate');
    }

    public function getEdit($id)
    {
        $contacto = Contacto::findOrFail($id);
        return view('serviciosedit', ['contacto' => $contacto]);
    }

    public function store(Request $request){
        $registronuevo = New Contacto();
        $registronuevo -> nombre = $request -> input('nombre');
        $registronuevo -> apellidos = $request -> input('apellidos');
        $registronuevo -> telefono = $request -> input('numerotelefono');
        $registronuevo -> email = $request -> input('correo');
        $registronuevo -> consulta = $request -> input('consulta');
        $registronuevo -> save();
        $url = action([ContactoController::class, 'getShow'], ['id' => $registronuevo -> id]);
        return redirect($url);
    }
}
