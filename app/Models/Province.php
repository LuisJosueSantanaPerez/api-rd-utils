<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function municipalities()
    {
        return $this->hasmany(Municipality::class, 'province_code', 'code');
    }
}