<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLoginLog extends Model
{
    use HasFactory;

    protected $table = 'user_login_log';
    protected $fillable = [
        'user_id', 'remote_addr', 'guard', 'remote_addr_v6', 'remember_checked', 'user_agent'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
