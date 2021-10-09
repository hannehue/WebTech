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

        $artist = Artist::find(request('artist'));
        $album = new Album();
        $album->name = request("name");
        $album->album_release = request("album-release");
        $album->album_type = request("album-type");
        $album->songs = request('songs');
        $album->album_description = request("album-description");
        $album->artist()->associate($artist);

        $album->save();

        return redirect("/");
    }

}
