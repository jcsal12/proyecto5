<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Libros;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Libros::class, 'books');
    }
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

    public function store(Request $request)
    {

        $book = json_decode($request->getContent(), true);

        $book = Libros::create($book['data']['attributes']);

        return new BookResource($book);
    }

    public function show(Libros $book)
    {
        return new BookResource($book);
    }

    public function update(Request $request, Libros $book)
    {
        $bookData = json_decode($request->getContent(), true);
        $book->update($bookData['data']['attributes']);

        return new BookResource($book);
    }

    public function destroy(Libros $book)
    {
        $book->delete();
    }
}
