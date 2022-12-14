<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getIndex()
    {
        return view('servicios');
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
        return 'Vas a editar el servicio '.$id;
    }



}
