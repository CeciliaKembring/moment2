<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    use HasFactory;
//Lägg till nedan i databas
    protected $fillable = [
        'place',
        'kilometers', 
        'visited'
    ];
}
