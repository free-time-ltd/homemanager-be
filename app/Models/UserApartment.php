<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserApartment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'apartment_id', 'role'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
