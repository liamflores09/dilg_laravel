<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
    ];

    // Hash password before storing in the database
    public static function boot()
    {
        parent::boot();

        static::creating(function ($admin) {
            if ($admin->password) {
                $admin->password = bcrypt($admin->password); // Hash the password
            }
        });
    }
}
