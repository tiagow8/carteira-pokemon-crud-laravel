<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer_pokemons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainer_id')->references('id')->on('trainers')->cascadeOnDelete();
            $table->foreignId('pokemon_id')->references('id')->on('pokemons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer_pokemons');
    }
};
