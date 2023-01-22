<?php

namespace App\Models;

use App\Models\Cinema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = 'provinsis';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function cinemas()
    {
        return $this->hasMany(Cinema::class);
    }
}
