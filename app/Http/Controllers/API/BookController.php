<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Resources\BookResource;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return CentroResource::collection(Centro::paginate());
        $response = Http::get('https://api.wallapop.com/api/v3/general/search?keywords=libros');
        return response()->json(json_decode($response->getBody()->getContents())->search_objects[0]);
    }
}
