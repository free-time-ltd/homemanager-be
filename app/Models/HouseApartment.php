<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseApartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'house_id', 'floor', 'apartment'
    ];

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
