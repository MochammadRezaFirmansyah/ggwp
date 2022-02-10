<?php

namespace App\Http\Controllers;
use App\Models\Media;

class MediaController extends Controller
{
    public function index()
    {
        $media = media::get();

        return response()->json($media, 200);
    }

    public function show($id)
    {
        $media = Media::Where(['id' => $id])->with(['tournaments'])->get();
        
        if (!$media) {
            abort(404);
        }
        return response()->json($media, 200);
    }

    public function store()
    {
        $attr = request()->all();

        $media = Media::create($attr);

        return response()->json($media, 200);
    }

    public function update($id)
    {
        $media = Media::find($id);

        $input = request()->all();


        $media->fill($input);
        $media->save();

        return response()->json($media, 200);
    }

    public function delete($id)
    {
        $media = Media::find($id);

        $media->delete();
        $message = ['message' => 'delete successfully', 'id_media' => $id];
        return response()->json($message, 200);
    }
}
