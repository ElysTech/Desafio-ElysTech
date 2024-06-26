# Será usada a versão 8.3.4 do PHP no projeto.
Você precisará de instalar o [Composer](https://getcomposer.org/download/)

# Documentação Laravel para instalação
https://laravel.com/docs/11.x/installation

## Documentação Oficial Laravel
https://laravel.com/docs/11.x

## Será utilizado o SQLite para operações no banco de dados

### Windows
https://herd.laravel.com/windows
Windows precisa de **bastante** atenção para deixar o ambiente preparado para executar as operações no banco com SQLite ou seja qual DB for.

### Linux
https://www.treinaweb.com.br/blog/configurando-o-ambiente-de-desenvolvimento-php-laravel-no-linux


### Para executar a aplicação:
Copiar o arquivo .env.example com o nome .env:
Windows
**`Copy-Item .\.env.example .\.env`**,
Ubuntu:
**`cp .env.example .env`**.
Rodar os comandos:
Para instalar os pacotes: **`composer update`**
Para instalar as migrações e pacotes: **`php artisan migrate:install`**
Para rodar as migrações: **`php artisan migrate`**
Para iniciar o servidor: **`php artisan serve`**

### Para popular dados fakes no DB basta rodar o comando:
**`php artisan db:seed`**
Esse comando gera uma gama de dados fakes no arquivo [DataBaseSeeder](./database/seeders/DatabaseSeeder.php).

### Para postman ou insomnia ou programas que faz requisições HTTPS:
Basta importar o arquivo [Teste Collection](./Teste.postman_collection.json).
Que já tem algumas rotas testadas e funcionando.

### Por padrão o laravel resolve as requisições no endpoint provido no terminal
**BASEURL**: **`http://127.0.0.1:8000/api`**.