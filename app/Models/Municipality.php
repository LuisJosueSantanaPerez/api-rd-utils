<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    use HasFactory;

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }

    public function sectors()
    {
        return $this->hasmany(Sector::class, 'municipality_code', 'code');
    }
}