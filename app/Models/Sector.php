<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    public function municipality()
    {
        return $this->belongsTo(Municipality::class, 'municipality_code', 'code');
    }
}