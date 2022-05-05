<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Trainer extends Model
{
    use HasFactory;

    protected $table = 'trainers';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'region',
        'age',
        'gender',
    ];

    protected $casts = [
        'age' => 'int',
    ];
    public function pokemons(){
        return $this->hasMany(TrainerPokemons::class, 'trainer_id', 'id');
    }
}
