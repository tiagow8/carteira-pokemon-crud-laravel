<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/menuPokemon/menuPokemon.css">
    <title>Menu Pokemon</title>
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
            <div id="buttonStart" class="buttonStart"><p>Bitcoin</p><div class="whiteButton btn"></div></div>
            <div id="buttonSelect" class="buttonSelect"><p>Blockchain</p><div class="whiteButton btn"></div></div>
        </div>
        <!-- screen of the gameboy -->
        <div id="screen" class="screen">
            <form action="login" method="POST">
                @csrf
                <input type="hidden" name="username" value="{{$username}}">
                <button type="submit" class="btnBack">Voltar ao Menu</button>
            </form>
            <div class="userInfoContainer">
                <h1>{{$username}}</h1>
            </div>
            <div class="pokemonsContainer">
                @foreach($pokemons as $pokemon)
                    <div class="pokemonInfo">
                        <form action="addPokemonToTrainer" method="POST">
                            @csrf
                            <input type="hidden" name="username" value="{{$username}}">
                            <input type="hidden" name="id" value="{{$pokemon->id}}">
                            <input type="hidden" name="page" value="{{$page}}">
                            <button type="submit" class="btnAdd">Add</button>
                        </form>
                        <span class="namePokemon">{{ucfirst($pokemon->name)}}</span>
                        <img class="imgPokemon" src="{{$pokemon->image_url}}">
                        <span class="type">{{ucfirst($pokemon->attribute)}}</span>
                    </div>
                @endforeach
            </div>
            <div class="buttonsPageContainer">
                <form action="abaPokemons" method="POST">
                    @csrf
                    <input type="hidden" name="username" value="{{$username}}">
                    <input type="hidden" name="page" value="{{($page - 1)}}">
                    <button type="submit" class="btnChangePage">Página Anterior</button>
                </form>
                <form action="abaPokemons" method="POST">
                    @csrf
                    <input type="hidden" name="username" value="{{$username}}">
                    <input type="hidden" name="page" value="{{($page + 1)}}">
                    <button type="submit" class="btnChangePage">Próxima Pagina</button>
                </form>
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
