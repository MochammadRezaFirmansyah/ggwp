<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Rangking;

class RangkingController extends Controller
{
    public function index()
    {
        $rangking = Rangking::get();

        return response()->json($rangking, 200);
    }

    public function show($id)
    {
        $rangking = Rangking::find($id);

        return response()->json($rangking, 200);
    }

    public function store()
    {
        $attr = request()->all();
        $rangking = Rangking::create($attr);

        return response()->json($rangking, 200);
    }

    public function update($id)
    {
        $rangking = Rangking::find($id);

        $rangking->name = request()->input('name');
    
        
        $rangking->save();

        return response()->json($rangking, 200);
    }

    public function delete($id)
    {
        $rangking = Rangking::find($id);

        $rangking->delete();
        $message = ['message' => 'delete successfully', 'id_rangking' => $id];
        return response()->json($message, 200);
    }
}
