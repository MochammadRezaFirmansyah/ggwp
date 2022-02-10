<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Streaming;

class StreamingController extends Controller
{
    public function index()
    {
        $streaming = Streaming::get();

        return response()->json($streaming, 200);
    }

    public function show($id)
    {
        $streaming = Streaming::find($id)->with(['tournament'])->get();

        return response()->json($streaming, 200);
    }

    public function store()
    {
        $attr = request()->all();
        $streaming = Streaming::create($attr);

        return response()->json($streaming, 200);
    }

    public function update($id)
    {
        $streaming = Streaming::find($id);

        $streaming->name = request()->input('name');
    
        
        $streaming->save();

        return response()->json($streaming, 200);
    }

    public function delete($id)
    {
        $streaming = Streaming::find($id);

        $streaming->delete();
        $message = ['message' => 'delete successfully', 'id_streaming' => $id];
        return response()->json($message, 200);
    }
}
