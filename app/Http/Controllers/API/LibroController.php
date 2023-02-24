<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Libros;
use App\Http\Resources\BookResource;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $numElementos = $request->input('numElements');

        $registros = searchByField(array('title', 'description'), Libros::class);
        //return $res;
        return BookResource::collection($registros->paginate($numElementos));
        //return response()->json(json_decode($response->getBody()->getContents())->search_objects[0]);

    }


}
