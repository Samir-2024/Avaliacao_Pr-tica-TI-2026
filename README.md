### Importante ao clicar em Cadastrar Startup , ele redireciona o usuario para ver os dados via json em uma outra view, e necessario voltar para a pagina anterior atualizar a pagina . Para a possibilidade da visualização das Startups


## A utilização da LGPD para este projeto serve para armazenar o email e contato do usuario , devido a utilização de @csrf, para o cadastramento da startup.


##  Pré-requisitos

Certifique-se de que sua máquina atende aos requisitos de versão:

* **PHP:** `8.2.12`
* **Composer:** `2.8.11`
* **Banco de Dados:** PostgreSQL

##  Passo a Passo

Executar os comandos na exata ordem para evitar o caos:

### 1. Instalar dependências
composer install

### 2. Configurar o ambiente
cp .env.example .env

### 3. Gerar chave da aplicação
php artisan key:generate

### 4. Rodar as migrations
php artisan migrate

### 5. Iniciar o servidor
php artisan serve

### Acessar o servidor na rota 
php artisan serve