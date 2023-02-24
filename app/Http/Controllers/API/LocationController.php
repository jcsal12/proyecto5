<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\LocationResource;
use App\Models\Location;

class LocationController extends Controller
{
    public function __construct()
    {
         $this->authorizeResource(Location::class, 'location');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numElementos = $request->input('numElements');

        $registros = searchByField(array('name'), Location::class);

        return LocationResource::collection($registros->paginate($numElementos));
    }

    public function store(Request $request)
    {

        $location = json_decode($request->getContent(), true);

        $location = Location::create($location['data']['attributes']);

        return new LocationResource($location);
    }

    public function show(Location $location)
    {
        return new LocationResource($location);
    }

    public function update(Request $request, Location $location)
    {
        $locationData = json_decode($request->getContent(), true);
        $location->update($locationData['data']['attributes']);

        return new LocationResource($location);
    }

    public function destroy(Location $location)
    {
       $location->delete();
    }
}


