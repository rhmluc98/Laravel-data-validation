<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\PagesController;
use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homepage(){

        $movies = Movie::all();
        // return view('welcome',[
        //     'films'=>$movies
        // ]);

        // return $movies;

        return view('welcome',compact('movies'));
    }

    public function add_movie(){
        return view('add_movie');
    }

    public function movie_detail(Movie $movie){
       return view('detail', compact('movie'));
    }

    public function submit_movie(Request $movies){
       $movie = new Movie();
       $movie->title = $movies->title;
       $movie->language = $movies->language;
       $movie->rating = "0";
       $movie->poster = "Luc";
       $movie->description = $movies->description;
       $movie->save();
       return redirect()->back();
    }
    
}
