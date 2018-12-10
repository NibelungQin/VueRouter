<?php

namespace App\Http\Controllers\Api;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CafesController extends Controller
{
    /**
     * 获得全部咖啡店
     */
    public function getCafes()
    {
        $cafes = Cafe::all();
        return response()->json($cafes);
    }

    public function postNewCafe(Request $request)
    {
        $data = [
            'name'    => $request->get('name'),
            'address' => $request->get('address'),
            'city'    => $request->get('city'),
            'state'   => $request->get('state'),
            'zip'     => $request->get('zip'),
        ];
        $cafe = Cafe::create($data);
        return response()->json($data,201);
    }

    public function getCafe($id)
    {
        $cafe = Cafe::where('id',$id)->first();
        return response()->json($cafe);
    }
}
