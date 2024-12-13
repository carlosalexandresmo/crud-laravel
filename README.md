# **CRUD Laravel**

CRUD Laravel é um projeto desenvolvido utilizando Laravel. Neste arquivo README, você encontrará um guia passo a passo para abrir o projeto em seu ambiente local.

## Pré-Requisitos

-   ✅ Git >= 2.47.0
-   ✅ PHP >= 8.2
-   ✅ Composer >= 2.8
-   ✅ Laravel >= 8

## Como Rodar

#### Passo 1️⃣: Clonar o repositório

```bash
git clone https://github.com/carlosalexandresmo/crud-laravel.git
```

#### Passo 2️⃣: Acesse a pasta do projeto clonado:

```sh
cd crud-laravel/
```

#### Passo 3️⃣: Crie o arquivo .env:

```sh
cp .env.example .env
```

#### Passo 4️⃣: Configure as credenciais do banco de dados no arquivo .env:

```dosini
DB_CONNECTION=sqlite
```

#### Passo 5️⃣: Suba os containers do projeto:

```sh
docker-compose up -d
```
#### Passo 6️⃣: Acesse o container:

```sh
docker-compose exec app bash
```

#### Passo 7️⃣: Instale as dependências do projeto:

```sh
composer install
```
#### Passo 8️⃣: Gere a key do projeto Laravel:

```sh
php artisan key:generate
```

#### Passo 9️⃣: Rode o servidor:

```sh
php artisan serve
```

#### Passo 9️⃣: Acesse o projeto:

```sh
http://127.0.0.1:8000/login
```

## Rotas e Payloads

#### Rota de cadastro

```sh
POST /api/register 
```

```sh
{
	"name":"Nome",
	"email":"email@gmail.com",
	"password":"12345678",
	"confirmed_password": "12345678",
	"street":"Rua",
	"district":"",
	"street_number":"",
	"city":"",
	"state":"SP",
	"zip_code":"10000000"
}
```

#### Rota de login

```sh
POST /api/login
```

```sh
{
	"email":"carlos.alexandre.smo@gmail.com",
	"password":"12345678"
}
```

#### Rota de listagem de usuários

```sh
GET /api/users
```

```sh
{
	"email":"carlos.alexandre.smo@gmail.com",
	"password":"12345678"
}
```

#### Rota de busca CEP

```sh
GET /api/cep/{cep}
```

```sh

```

#### Rota de deslogar

```sh
POST /api/logout
```

```sh

```
