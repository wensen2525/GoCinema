<?php

namespace App\Models;

use App\Models\Film;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
