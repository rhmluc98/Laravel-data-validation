<?php

namespace App\Models;
use App\Models\Image;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','country'];

    public function movies(){
        return $this->hasMany(Movie::class);
    }
    public function image(){
        return $this->hasOne(Image::class);
    }
}
