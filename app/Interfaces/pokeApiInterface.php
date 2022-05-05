<?php

namespace App\Interfaces;

interface pokeApiInterface{
    public function getPokemonDataById(int $id);
    public function getPokemonsData(int $limit);
    public function getPokemonDataByName(string $name);
}