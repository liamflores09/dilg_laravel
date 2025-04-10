<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationEntry extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'contact_number',
        'email',
        'lgu',
        'designation',
        'breakout_session',
    ];

   
}

