<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<h1>Pokedéx</h1>
<a href ="https://www.youtube.com/watch?v=hweuPJzICao">Link do vídeo demonstração</a><br>
<a href="http://pokedex-jeanb.herokuapp.com/home">Link do site</a><br>
Neste projeto você pode cadastrar um usuário e posteriormente logar com ele, podendo adicionar pokemons em seu registro, tudo isso fica guardado
em um banco de dados. Projeto inspirado no <a href="https://github.com/he4rtlabs/he4rtlabs-challenges-04">Heart Challenge 04 </a>

## Quero rodar em minha máquina, como fazer?

Primeiro irá ser necessário iniciar um projeto laravel. Para isso, veja a documentação do laravel neste link: https://laravel.com/docs/9.x/installation

### Passo 1:
Vá no arquivo .env.example e o renomeie para .env.
Neste arquivo você precisa alterar os seguintes campos:<br>

### Nome do seu banco de dados:<br>

DB_CONNECTION=mysql<br>
### Se quiser rodar localmente mantenha este ip:<br>
DB_HOST=127.0.0.1<br>
### Veja qual porta seu banco de dados utiliza, no caso do MYSql por padrão é a 3306<br>
DB_PORT=3306<br>
### Nome do banco de dados onde as tabelas são guardadas. (Se não tiver abra o terminal no mysql e escreva "CREATE DATABASE Nome_que_voce_quiser";<br>
DB_DATABASE=laravel<br>
### Username para utilizar seu banco de dados(por padrão é root)
DB_USERNAME=root<br>
### Senha do banco de dados
DB_PASSWORD=

### Passo 2:

Abra seu terminal no diretório do projeto, e escreva o seguinte comando:

#### php artisan migrate

### Após isso, rode este comando que irá popular a sua tabela Pokemons.

#### php artisan DB:seed

Agora seu projeto está pronto para iniciar.

## Imagens do projeto: 

![image](https://user-images.githubusercontent.com/94989737/157054675-ce5477ef-daf7-4b68-850a-f22fd18feca7.png)

![image](https://user-images.githubusercontent.com/94989737/157055866-37550da7-f3dc-4df0-bf46-a29e589c96a2.png)

![image](https://user-images.githubusercontent.com/94989737/157055927-43373f9d-8afb-46bb-8f56-67fbbaf143ed.png)

![image](https://user-images.githubusercontent.com/94989737/157056011-397835f2-4d8a-4e8d-8080-ea1c5128d597.png)
