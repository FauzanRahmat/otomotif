<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navteks extends Model
{
    use HasFactory;

    protected $table='navteks';

    protected $fillable = [
        'title',
        'about',
    ];
}
