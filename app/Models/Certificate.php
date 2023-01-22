<?php

namespace App\Models;

use App\Models\Participant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;

    protected $table = 'certificates';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
