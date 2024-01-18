<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json(People::all());
    }
    public function read(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json(People::findOrFail($id));
    }
    public function create(Request $request): \Illuminate\Http\JsonResponse
    {

        $item = new People();
        $item->name=$request->name;
        $item->lastName=$request->lastName;
        $item->phoneNumber=$request->phoneNumber;
        $item->street=$request->street;
        $item->city=$request->city;
        $item->country=$request->country;


        $item->save();

        return response()->json('Created successfully', 201);
    }
    public function update(Request $request, string $id ): \Illuminate\Http\JsonResponse
    {
        $item = People::findOrFail($id);
        $item->update($request->all());

        return response()->json('update successfully');
    }
    public function remove(string $id): \Illuminate\Http\JsonRespons
    {
        $item = People::findOrFail($id);
        $item->delete();

        return response()->json('removed successfully');
    }

}

