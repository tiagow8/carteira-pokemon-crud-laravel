<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/menuUser/menuUser.css">
    <title>Home</title>
</head>
<body>
    <div id="gameboy" class="gameboy">
        <!-- left part of the gameboy -->
        <div id="gamepad" class="gamepad">
            <div id="gamepadHorizontalLine" class="gamepadHorizontalLine btn">
                <span>&#9650;</span>
                <span>&#9660;</span>
            </div>
            <div id="gamepadVerticalLine" class="gamepadVerticalLine btn">
                <span>&#9650;</span>
                <span>&#9660;</span>
            </div>
        </div>
        <div id="buttonsMenu" class="buttonsMenu">
            <div id="buttonStart" class="buttonStart"><p>Go🔥</p><div class="whiteButton btn"></div></div>
            <div id="buttonSelect" class="buttonSelect"><p>🛸</p><div class="whiteButton btn"></div></div>
        </div>
        <!-- screen of the gameboy -->
        <div id="screen" class="screen">
            <form action="abaPokemons" method="POST">
                @csrf
                <input type="hidden" name="username" value="{{$trainer->username}}">
                <input type="hidden" name="page" value="1">
                <button type="submit" class="btnAddPokemonPage">Adicionar Pokemon</button>
            </form>
            <div class="userInfoContainer">
                <h1>{{$trainer->username}}</h1>
                @if($trainer->gender == 'masculino')
                <img id="imgAvatar" class="imgAvatar" src="../images/maleTrainer.png" alt="Avatar do Personagem">
                @else
                <img id="imgAvatar" class="imgAvatar" src="../images/femaleTrainer.png" alt="Avatar do Personagem">
                @endif
                <h2>Region: {{$trainer->region}}</h2>
                <h3>Age: {{$trainer->age}}</h3>
            </div>
            <div id="pokemonsInfoContainer" class="pokemonsInfoContainer">
                @foreach($pokemons as $pokemon)
                <div class="pokemonInfo">
                    <img class="imgPokemon" src="{{$pokemon['image_url']}}">
                    <p class="namePokemon">{{ucfirst($pokemon['name'])}}</p>
                    <p class="typePokemon">{{$pokemon['attribute']}}</p>
                </div>
                @endforeach
            </div>
        </div>
        <!-- right part of the gameboy -->
        <div id="powerButton" class="powerButton"><p>PokeCoin</p></div>
        <div id="buttonsAction" class="buttonsAction">
            <div id="buttonA" class="buttonA btn">$</div>
            <div id="buttonB" class="buttonB btn">$</div>
        </div>
        <div id="lines" class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div id="gameboyBack" class="gameboyBack"></div>
</body>
</html>
