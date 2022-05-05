<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image_url',
        'attribute',
    ];
}
