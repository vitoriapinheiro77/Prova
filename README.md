# Prova

# Como rodar o projeto

Pré-requisitos: 

Docker e Docker Compose

# Clone o repositório:
   
git clone https://github.com/vitoriapinheiro77/Prova.git

# Suba os containers do Docker:

docker-compose up -d --build

# Instale as dependências do Laravel (via container):

docker-compose exec app composer install

# Configure as variáveis de ambiente e gere a chave:

docker-compose exec app cp .env.example .env

docker-compose exec app php artisan key:generate


# Dê permissão nas pastas de armazenamento:

docker-compose exec app chmod -R 777 storage bootstrap/cache

# Rode as Migrations para criar o banco de dados:

docker-compose exec app php artisan migrate

# Acesse no navegador:

Tela Inicial (Teste): http://localhost:8000

Sistema de Categorias (O Trabalho): http://localhost:8000/categorias

