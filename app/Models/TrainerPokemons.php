<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerPokemons extends Model
{
    use HasFactory;

    protected $table = 'trainer_pokemons';

    public $timestamps = false;

    protected $fillable = [
        'trainer_id',
        'pokemon_id',
    ];
    public function trainer(){
        return $this->hasOne(Trainer::class, 'id', 'trainer_id');
    }
    public function pokemonInfo(){
        return $this->hasOne(Pokemon::class, 'id', 'pokemon_id');
    }
}
