<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'city', 'address', 'zip_code',
        'coords', 'apartments_total', 'notes', 'image_url'
    ];

    public function apartments()
    {
        return $this->hasMany(HouseApartment::class);
    }
}

