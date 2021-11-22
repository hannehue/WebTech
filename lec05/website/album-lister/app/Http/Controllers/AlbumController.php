<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        return view("albums.index")->with("albums", Album::all());
    }

    public function create(){
        return view("albums.create")->with("artists", Artist::all());
    }

    public function new(){

        request()->validate([
            'name' => ['required', 'string'],
            'album-release' => ['required', 'numeric'],
            'artist' => ['required', 'exists:artists,id']
        ]);

        $artist = Artist::find(request('artist'));
        $album = new Album();
        $album->name = request("name");
        $album->album_release = request("album-release");
        $album->album_type = request("album-type");
        $album->songs = request('songs');
        $album->album_description = request("album-description");
        $album->artist()->associate($artist);

        $album->save();

        session()->increment('albumsAdded');

        return redirect()->route('albums.index')->with('message', 'Album '. $album->name. ' created sucessfully');
    }

    public function show(Album $album){
        return view('albums.show')->with('album', $album);
    }

}
