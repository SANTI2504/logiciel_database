<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab_manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
