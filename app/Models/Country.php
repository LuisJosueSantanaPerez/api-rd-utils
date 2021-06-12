<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function provinces()
    {
        return $this->hasmany(Province::class, 'country_id', 'id');
    }
}