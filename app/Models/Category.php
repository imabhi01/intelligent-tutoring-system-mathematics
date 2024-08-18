<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    const CATEGORY = [
        'Arithmetic'   => 'ARITHMETIC', 
        'Algebra'   => 'ALGEBRA', 
        'Geometry'  => 'GEOMETRY',
        'Trignometry'  => 'TRIGNOMETRY',
    ];
}
