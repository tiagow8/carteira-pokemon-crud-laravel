<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pokeApiResponse extends Model
{
    public string $name;
    public string $imgUrl;
    public string $type;
    function __construct(string $name, string $imgUrl, string $type){
        $this->name = $name;
        $this->imgUrl = $imgUrl;
        $this->type = $type;
    }
}
