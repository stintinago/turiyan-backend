<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArtistPost;
use App\Http\Requests\ArtistPut;
use App\Models\Artist;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    //Function to get all Artist
    public function all()
    {
        return Artist::all();
    }

    //Function to get an especific Artist
    public function get($id)
    {
        return Artist::find($id);
    }

    //Funtion create Artist and its Request
    public function create(ArtistPost $request)
    {
        $artist = Artist::create($request->validated());

        return response()->json($artist, status:201);
    }

    //Function edit artist and its Request
    public function update (ArtistPut $request, $id)
    {
        $artist = Artist::find($id)->update($request->validated());

        return response()->json($artist, status:201);
    }

    //Function delete artist
    public function delete ($id)
    {
        return Artist::find($id)->delete();
    }
}
