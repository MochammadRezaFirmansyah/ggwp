<?php

namespace App\Http\Controllers;
use App\Models\Tournament;

class TournamentController extends Controller
{
    public function index()
    {
        $tournament = Tournament::get();

        return response()->json($tournament, 200);
    }

    public function show($id)
    {
        $tournament = Tournament::find($id)->with(['user'])->get();

        return response()->json($tournament, 200);
    }

    public function store()
    {
        $attr = request()->all();
        $tournament = Tournament::create($attr);

        return response()->json($tournament, 200);
    }

    public function update($id)
    {
        $tournament = Tournament::find($id);

        $tournament->name = request()->input('name');
        $tournament->save();

        return response()->json($tournament, 200);
    }

    public function delete($id)
    {
        $tournament = Tournament::find($id);

        $tournament->delete();
        $message = ['message' => 'delete successfully', 'id_tournament' => $id];
        return response()->json($message, 200);
    }
}
