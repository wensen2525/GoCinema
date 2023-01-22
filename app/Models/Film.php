<?php

namespace App\Models;

use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    protected $table = 'films';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
