<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Add the 'name' property
        'email',
        'phone',
        'address',
        'company_logo',
    ];
    
}
