<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index(){
        $data['artists'] = \DB::table('artists')->get();
        return view('artists/index', $data);
    }

    public function show(Artist $artist){
        $artist = $artist;
        dd($artist);
    }
}
