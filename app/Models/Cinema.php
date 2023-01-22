<?php

namespace App\Models;

use App\Models\Film;
use App\Models\Provinsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cinema extends Model
{
    use HasFactory;

    protected $table = 'cinemas';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }

    public function films()
    {
        return $this->hasMany(Film::class);
    }
}
