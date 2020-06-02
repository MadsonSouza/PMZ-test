#baixar laravel via composer - acredito que o docker baixe da biblioteca mas por via das dúvidas
composer create-project --prefer-dist laravel/laravel laravel

#para instalar os componentes via docker-compose
#instala instancia do laravel, nginx e banco de dados mysql
docker-compose up -d

#para criar as tabelas no banco de dados
php artisan migrate

#para fazer o seed de dados fictícios
php artisan db:seed

a aplicação roda em http://localhost:8000/ no docker 
via artisan na maquina local http://localhost:80/

api de dados http://localhost:8000/api/