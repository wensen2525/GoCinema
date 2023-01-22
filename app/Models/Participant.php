<?php

namespace App\Models;

use App\Models\Certificate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    protected $table = 'participants';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }
}
