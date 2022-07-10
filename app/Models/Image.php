<?php

namespace App\Models;
use App\Models\Poster;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path','poster_id'];
    public function poster(){
        return $this->belongsTo(Poster::class);
    }
}
