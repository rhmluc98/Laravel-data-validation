<?php

namespace App\Http\Controllers\Pages;
use App\Models\Poster;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\PosterController;
use Illuminate\Http\Request;
use App\Models\Image;

class PosterController extends Controller
{
    public function poster_register(){
        return view('poster_register');
    }

    public function submit_register(Request $registers){

        $registers->validate([
            'name' => ['required','min:1','max:250'],
            'email' => ['required','min:5','max:50']
        ]);

        $poster = new Poster();

            $poster -> name = $registers -> poster_name;
            $poster -> email = $registers -> poster_email;
            $poster -> country = $registers -> country;

        $name_file = time().''.rand();
        $path = $registers->poster_image->storeAs('postersImages',$name_file,'public');

        $image = new Image();
        $image->path = $path;
        $poster->image()->save($image);
        
        return redirect()->back();


    }
}
