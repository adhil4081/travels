<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable = [
        'name', // add 'name' here
        'price',
        'duration',
        'route',
        'description',
        'continent',
        'country',
        'state',
        'city',
        'media', // Add any other fields you want to allow mass assignment for
    ];
    use HasFactory;
}
