<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;
use App\Repositories\pokeApiRepository;
class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokeApiRequest = new pokeApiRepository;
        $pokemons = $pokeApiRequest->getPokemonsData(30);
        foreach($pokemons->results as $pokemon){
            $pokemon = $pokeApiRequest->getPokemonDataFromUrl($pokemon->url);
            DB::table('pokemons')::create([
                'name' => $pokemon->name,
                'image_url' => $pokemon->imgUrl,
                'attribute' => $pokemon->type,
            ]);
        }
    }
}
