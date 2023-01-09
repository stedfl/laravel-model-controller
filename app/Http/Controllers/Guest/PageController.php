<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function contacts() {
        return view('contacts');
    }

    public function about() {
        return view('about');
    }

    public function details($id) {
        $movie = Movie::find($id);
        if(is_null($movie)) {
            abort(404, 'Movie not found!');
        }
        return view('details', compact('movie'));
    }
}
