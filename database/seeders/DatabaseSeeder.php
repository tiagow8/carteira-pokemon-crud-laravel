<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use App\Repositories\pokeApiRepository;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $pokemons = file_get_contents("https://pokeapi.co/api/v2/pokemon?limit=898");
        $pokemons = json_decode($pokemons);
        $pokeApiRequest = new pokeApiRepository;
        foreach($pokemons->results as $pokemon){
            $pokemon = $pokeApiRequest->getPokemonDataFromUrl($pokemon->url);
            Pokemon::create([
                'name' => $pokemon->name,
                'image_url' => $pokemon->imgUrl,
                'attribute' => $pokemon->type,
            ]);
        }
    }
}
