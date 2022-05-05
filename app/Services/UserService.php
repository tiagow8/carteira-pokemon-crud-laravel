<?php

namespace App\Services;

use App\Models\pokeApiResponse;

class UserService{
    public static function getTrainerPokemonsInfo($pokemons){
        $pokemonsData = [];
        foreach($pokemons as $pokemon){
            $pokemon = $pokemon->pokemonInfo;
            $pokemonInfo = [
                'name' => $pokemon->name,
                'image_url' => $pokemon->image_url,
                'attribute' => $pokemon->attribute,
            ];
            array_push($pokemonsData, $pokemonInfo);
        }
        return $pokemonsData;
    }
}