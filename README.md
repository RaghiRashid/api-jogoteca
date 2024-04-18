# Jogoteca API

API RESTful com autorização via JWT

## Pré-requisitos

Certifique-se de ter os seguintes requisitos antes de começar:

- PHP 7.4
- Composer
- Banco de dados (por exemplo, MySQL, PostgreSQL, SQLite)

## Instalação

Siga estas etapas para configurar e executar o projeto localmente:

1. Clone o repositório:

    ```bash
    git clone https://github.com/seu-usuario/seu-projeto.git
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd seu-projeto
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Copie o arquivo de ambiente de exemplo e configure suas próprias variáveis de ambiente:

    ```bash
    cp .env.example .env
    ```

    Edite o arquivo `.env` e configure as variáveis, especialmente as relacionadas ao banco de dados e à autenticação JWT.

5. Gere a chave de aplicativo:

    ```bash
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados para criar as tabelas necessárias:

    ```bash
    php artisan migrate
    ```

7. Inicie o servidor embutido do Laravel:

    ```bash
    php artisan serve
    ```

A aplicação estará disponível em `http://localhost:8000`.

## Proximas atualizações

1. Documentação utilizando swagger
