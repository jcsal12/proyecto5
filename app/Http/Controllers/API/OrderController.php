<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Resources\OrderResource;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = $request->user();

        $orders = $user->isAdmin()
        ? Order::all()
        : $user->customer->orders;

        // if($user->isAdmin()){
        //     $orders = Order::all();
        // }else{
        //     $orders = $user->customer->orders;
        // }

        return OrderResource::collection($orders);

    }

}
