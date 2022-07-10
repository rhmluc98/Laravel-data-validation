<?php

namespace App\Models;

use App\Models\Poster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function poster(){
        return $this->belongsTo(Poster::class);
    }
}
