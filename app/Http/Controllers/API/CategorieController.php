<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategorieResource;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{

    public function __construct()
    {
         $this->authorizeResource(Categorie::class, 'category');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('name'), Categorie::class);

        return CategorieResource::collection($registros->paginate($numElementos));
    }

    public function store(Request $request)
    {

        $category = json_decode($request->getContent(), true);

        $category = Categorie::create($category['data']['attributes']);

        return new CategorieResource($category);
    }

    public function show(Categorie $category)
    {
        return new CategorieResource($category);
    }

    public function update(Request $request, Categorie $category)
    {
        $categoryData = json_decode($request->getContent(), true);
        $category->update($categoryData['data']['attributes']);

        return new CategorieResource($category);
    }

    public function destroy(Categorie $category)
    {
        $category->delete();
    }
}
